<?php
ini_set("error_reporting", E_ALL);
error_log("\n ".date('H-i-s')."inicio subida de queja  ",3,"tmp/errorOI.log");
define('THUMBNAIL_PERCENT', 0.2);
define('DETAIL_PERCENT', 0.6);
define('THUMBNAIL_PATH','/_include/php/uploads/');
$countNotImages= 0;
$result= array();

for($i= 0;$i<=2;$i++){
    if($_FILES['fileToUpload']['error'][$i]==4){// 4 es el error de file que indica que no se subió ningún fichero        
        $countNotImages++;        
    }
    if($_FILES['fileToUpload']['error'][$i]!= UPLOAD_ERR_OK && $_FILES['fileToUpload']['error'][$i]!= 4 ){//diferente de 4 porque puede subir 1 solo archivo si quiere
        $result['isOk']=false;
        switch ($_FILES['fileToUpload']['error'][$i]) {
            case UPLOAD_ERR_INI_SIZE:
                $result['message']="El archivo ".$_FILES['fileToUpload']['name'][$i]." excede límite permitido (2Megas) inténtalo nuevamente";
                break;
            case UPLOAD_ERR_PARTIAL:
                $result['message']='El archivo fue subido sólo parcialmente';
                break;
            case UPLOAD_ERR_EXTENSION:
                $result['message']='El archivo subido se detuvo debido a su extensión';
                break;
            default :
                $result['message']="Ocurrió un error al momento de subir ".$_FILES['fileToUpload']['name'][$i]." intente nuevamente por favor asegúrese que su archivo sea una imágen válida y que pese menos de 2 megas";
                break;
        }
        error_log("\n ".date('H-i-s')." ERROR AL SUBIR  ".$_FILES['fileToUpload']['error'][$i],3,"tmp/errorOI.log");
        echo json_encode($result);
        exit;
    }
}
if($countNotImages==3){    
    $result['message']= "Debes ingresar al menos una imagen";
    $result['isOk']=false;
    echo json_encode($result);
    exit;
}

$distrito = $_POST['distrito'];

$name = $_POST['name'];

$email = $_POST['email'];
$message = $_POST['message'];
$title = $_POST['title'];

error_log("\n ".date('Y-m-d H:i:s')." files está compuesto por: ".print_r($_FILES,true),3,"tmp/errorOI.log");

require_once '../model/classes/modelCase.php';


$status = 0;
if(isset($_FILES['fileToUpload'])&& count($_FILES)>0){
    
    $objCaso = new modelCase();
    $lastCaseId = $objCaso->saveCase($distrito,$message,$title);
    require_once '../model/classes/Imagen.php';
    $errors= array();
    $numImageSaved = 0;
        
    
    $countImagesBadExtension=0;
    foreach($_FILES['fileToUpload']['tmp_name'] as $key => $tmp_name ){
        if($_FILES['fileToUpload']['error'][$key]==0){       
       
        $file_name =$_FILES['fileToUpload']['name'][$key];
        $file_size =$_FILES['fileToUpload']['size'][$key];
        $file_tmp =$_FILES['fileToUpload']['tmp_name'][$key];
        $file_type=$_FILES['fileToUpload']['type'][$key];
        $ext= pathinfo($file_name,PATHINFO_EXTENSION);
        error_log("\n ".date('Y-m-d H:i:s')." fileName: ".$file_name,3,"tmp/errorOI.log");
               
        list($width,$height,$type,$attr) = getimagesize($file_tmp);
        error_log("\n ".date('Y-m-d H:i:s')." tipo: ".$type,3,"tmp/errorOI.log");
        switch ($type){
            case IMAGETYPE_GIF:
                $image = imagecreatefromgif($_FILES["fileToUpload"]["tmp_name"]) or die('file1 not supported');                
            break;
            
            case IMAGETYPE_PNG:                
        error_log("\n ".date('Y-m-d H:i:s')." archivo a cargar: ".print_r($_FILES["fileToUpload"]["tmp_name"][0],true),3,"tmp/errorOI.log");
                $image = imagecreatefrompng($_FILES["fileToUpload"]["tmp_name"][$key]) or die('file2 not supported');                
            break;
        
            case IMAGETYPE_JPEG:
                $image = imagecreatefromjpeg($_FILES["fileToUpload"]["tmp_name"][$key]) or die('file3 not supported');                
            break;
        
            default:
                if($type!=NULL || $type!=''){
                    die("La imagen que has subido no está soportada por el sistema");
                }
            break;
        
        //no se hace el default porque ya se valida arriba por el tipo de variable si está vacío
        }
        
        /**
         * guardar en base de datos y luego grabar en disco
         */
        
        $pathToSaveImage = THUMBNAIL_PATH;
        
        
        if($file_name!=''){        
            $objImagen = new Imagen($pathToSaveImage,$file_name,$message,'','');
            $imageSavedID = $objImagen->saveImage($distrito,$lastCaseId,1);   
            $imageName = $imageSavedID.'.'.$ext;            
            $thumb_width = $width*THUMBNAIL_PERCENT;
            $thumb_height = $height*THUMBNAIL_PERCENT;
            
            $detail_width = $width*DETAIL_PERCENT;
            $detail_height = $height*DETAIL_PERCENT;
            $thumb = imagecreatetruecolor($thumb_width,$thumb_height);
            imagecopyresampled($thumb, $image,0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
            imagejpeg($thumb,  dirname(__DIR__)."/uploads/thumbnails/$imageName",100);
            
            $detail = imagecreatetruecolor($detail_width, $detail_height);
            imagecopyresized($detail, $image, 0, 0, 0, 0, $detail_width, $detail_height, $width, $height);
            imagejpeg($detail, dirname(__DIR__)."\uploads/details/$imageName",100);
            
            
            /**
             * se actualiza el nombre de la imagen ya que ahora se llama como su ID para evitar repetir
             */
            $objImagen->updateNameImage($imageName,$imageSavedID,$pathToSaveImage);
        }
        
//        echo dirname(__DIR__)."/uploads/";
        
        switch ($type) {
            case IMAGETYPE_JPEG:
                imagejpeg($image,dirname(__DIR__)."\uploads"."\ ".$imageName,100);
                error_log("\n ".date('Y-m-d H:i:s')." ruta para guardar: ".dirname(__DIR__)."\uploads\\".$imageName,3,"tmp/errorOI.log");
            break;
        case IMAGETYPE_GIF:
                imagegif($image,dirname(__DIR__)."/uploads/".$imageName);
            break;
        case IMAGETYPE_PNG:
                imagepng($image,dirname(__DIR__)."/uploads/".$imageName);
            break;

            default:
                break;
        }
        
        imagedestroy($image);
        
}}
    
}
 $result['isOk']=true;   
 $result['message']= "Gracias";
 echo json_encode($result);