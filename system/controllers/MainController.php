<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainController
 *
 * @author student
 */
class MainController {
    
    
    
    public function actionIndex(){
        
        global $context, $title;
        
        $context = "system/views/main/main.php";
        $title = "Main Page";
    }

}
