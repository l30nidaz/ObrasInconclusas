<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Imagen
 *
 * @author julio
 */
class Imagen {
    public $_name;
    public $_description;
    public $_imagenId;
    public $_path;
    public $_idCase;
    public $_idDistrict;
    public $_mysqli;
    public $_resized;
    public $_detailPath;
    
    public function __construct($path="",$title="",$description="",$resized="",$detailPath="") {
        $this->_path = $path;
        $this->_name = $title;
        $this->_description  = $description;
        $this->_resized = $resized;
        $this->_detailPath = $detailPath;
        
    }
    
    public function saveImage($distrito_id,$case_id,$user_id =1){
        $this->connect2DB();
        $query = "INSERT INTO imagenes VALUES(0,'$this->_name','$this->_description','$this->_path',$user_id,$distrito_id,$case_id,'$this->_resized','$this->_detailPath')";
        error_log("\n".date("Y-m-d H:i:s") ." query de las imagenes ::".$query,3,"tmp/errorOI.log");
        $this->_mysqli->query($query);
            if($this->_mysqli->insert_id > 0){
                return $this->_mysqli->insert_id;                
            }else{
                
                return 0;
            }
    }
    
    public function updateNameImage($newName,$id,$path){
        $this->connect2DB();
        $thumbnails='thumbnails/';
        $details='details';
        $query = "UPDATE imagenes SET imagen_nombre='$newName',imagen_ruta='$this->_path$newName',imagen_resized='$path$thumbnails$newName', imagen_detail = '$this->_path$details/$newName' WHERE imagen_id=".$id;
        error_log("\n".date("Y-m-d H:i:s") ." actualiza nombre ::".$query,3,"/home/uz2dscmwkckm/public_html/errorOI.log");
        $this->_mysqli->query($query);
    }
    
    
    public function getImages(){
        $this->connect2DB();
        $query = "SELECT imagen_resized,imagen_ruta,d.distrito_nombre,imagen_nombre,imagen_descripcion,caso_id FROM obrasinconclusas.imagenes i inner join distritos d ON
                    (i.distrito_id = d.distrito_id) group by caso_id ORDER BY imagen_id DESC LIMIT 20";
        error_log("\n".date("Y-m-d H:i:s") ." query de las thumbnails ::".$query,3,"/home/uz2dscmwkckm/public_html/errorOI.log");
        $result = $this->_mysqli->query($query);
        $data = array();
        if ($result->num_rows>0){
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){                
                $data[]=$row;
            }
        }
        return $data;
    }
    
    public function getImagesForCase($caso_id){
        $this->connect2DB();
        $query  ="SELECT i.*,d.distrito_nombre FROM obrasinconclusas.imagenes i inner join distritos d on
                (i.distrito_id = d.distrito_id)  where caso_id =".$caso_id;
        $result = $this->_mysqli->query($query);
        $data = array();
        if ($result->num_rows>0){
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){                
                $data[]=$row;
            }
        }
        return $data;
    }
    
    
    private function connect2DB() {
        $servername = 'localhost';
        $username = "leonidaz";
        $password = "Antuannete@22";
        $dbname = "obrasinconclusas";
        $this->_mysqli = new mysqli($servername, $username, $password, $dbname);
//        /* cambiar el conjunto de caracteres a utf8 */
        if (!$this->_mysqli->set_charset("utf8")) {
            printf("Error cargando el conjunto de caracteres utf8: %s\n", $this->_mysqli->error);
            exit();
        } else {
//            printf("Conjunto de caracteres actual: %s\n", $this->_mysqli->character_set_name());
        }
        if (mysqli_connect_error()) {
            die('Error de Conexión (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
        }
    }
    
}
