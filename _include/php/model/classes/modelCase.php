<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of modelCase
 *
 * @author julio
 */
//include './Connection.php';
class modelCase {
    public $_mysqli;
    public $_status;
    public function __construct() {
//         $conn = new Connection();
    }
    
    public function getDistritos(){
        $this->getConnection();
        $query = "SELECT distrito_id as id,distrito_nombre as nombre FROM obrasInconclusas.distritos where idProv=127";
        $result = $this->_mysqli->query($query);
        if ($result->num_rows>0){
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[]=$row;
            }
            return $data;
               
        }else{
            echo $query;
        }
        
    }
    
    public function getDistrictWithCases(){
        $this->getConnection();
        $query = "SELECT d.distrito_nombre AS nombre,caso_id,d.distrito_id 
                    FROM obrasInconclusas.casos c INNER JOIN distritos d ON (c.distrito_id = d.distrito_id) where d.idProv=127 GROUP BY distrito_nombre";
        $result = $this->_mysqli->query($query);
        if ($result->num_rows>0){
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[]=$row;
            }
            return $data;
               
        }else{
            echo $query;
        }
    }
    
    public function saveCase($distrito,$message,$title){ 
        error_log("\n".date("Y-m-d H:i:s") ." llamando a getConextion:: ",3,"tmp/errorOI.log");
        $this->getConnection();
        $query="INSERT INTO casos VALUES(0,$distrito,1,'$title','$message',6,now(),'')";
        error_log("\n".date("Y-m-d H:i:s") ." query insert case:: ".$query,3,"tmp/errorOI.log");
        $this->_mysqli->query($query);
            if($this->_mysqli->insert_id > 0){
                error_log("\n".date("Y-m-d H:i:s") ." èxito al grabar:: ".$query,3,"tmp/errorOI.log");
                return $this->_mysqli->insert_id;                
            }else{
                error_log("\n".date("Y-m-d H:i:s") ." error al grabar:: ".$query,3,"tmp/errorOI.log");
                return 0;
            }
    }
    
    public function getCases($user_id){   
        $this->getConnection();
        $query =    "SELECT c.caso_nombre AS titulo,d.distrito_nombre as distrito,i.imagen_resized as imagen_path FROM casos c 
                            inner join distritos d ON (c.distrito_id = d.distrito_id) 
                            inner join imagenes i on (i.caso_id = c.caso_id)
                    WHERE caso_estado = 5 and c.usuario_id = ".$user_id;
        
        error_log("\n ".date('Y-m-d H:i:s')." query para obtener los casos de un usuario: ".$query,3,"tmp/errorOI.log");
        $result = $this->_mysqli->query($query);
        if ($result->num_rows>0){
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[]=$row;
            }
            return $data;
               
        }else{
            echo "::ERROR BY SERVER WHEN GETTING DATA::";
        }
        
    }
    
    public function getConnection(){
        
        $servername = 'localhost';
        $username = "root";
        $password = "root";
        $dbname = "obrasInconclusas";
        $this->_mysqli = new mysqli($servername, $username, $password, $dbname);
//        /* cambiar el conjunto de caracteres a utf8 */
        error_log("\n ".date('H-i-s')."inicio de conexion a la base de datos  <br/>",3,"tmp/errorOI.log");
        if (!$this->_mysqli->set_charset("utf8")) {
            printf("Error cargando el conjunto de caracteres utf8: %s\n", $this->_mysqli->error);
            exit();
        } else {
            error_log("\n ".date('H-i-s')."conexion exitosa? <br/>",3,"tmp/errorOI.log");
//            printf("Conjunto de caracteres actual: %s\n", $this->_mysqli->character_set_name());
        }
        if (mysqli_connect_error()) {
            error_log("\n ".date('H-i-s')."error al conectarse a la base de datos  <br/>".$this->_mysqli->connect_error,3,"tmp/errorOI.log");
            /*die('Error de Conexión (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());*/
        }else{
            $this->_status = true;
            return $this->_status;
        }
    }
}
