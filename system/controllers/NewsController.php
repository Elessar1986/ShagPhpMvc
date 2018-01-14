<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsController
 *
 * @author student
 */
class NewsController {
    
    
    public function actionList(){
        
        global $context, $title;
        $context = "system/views/news/main.php";
        $title = "News Page";
    }
}
