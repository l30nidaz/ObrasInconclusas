<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require_once '../model/classes/Connection.php';
//require_once '../model/classes/Caso.php';
class casoController {
    
    
    public function getDistritos() {
        error_log("\n estamos en el controler: ",3,"tmp/errorOI.log");
        require '../model/classes/Caso.php';
//        $caso = new Caso();
//        return $caso->getDistritos();
        
    }
}