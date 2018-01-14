<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Router
 *
 * @author student
 */
class Router {
    
    private $routes;
    
    public function __construct() {
        $path = ROOT."/system/config/routes_table.php";
        $this->routes = include($path);
    }
    
    public function run(){
        $url = filter_input(INPUT_SERVER, "REQUEST_URI");
        $parts = explode("/", $url);
        
        $check = FALSE;
        
        foreach ($this->routes as $key => $value) {
            if($parts[1]."/".$parts[2] == $key){
                $controller = $value[0];
                $method = $value[1];
                $check = TRUE;
                break;
            }
        }
        
        if(!$check){
            $controller = $this->routes["main/index"][0];
            $method = $this->routes["main/index"][1];
            
        }
        
        require ROOT.'/system/controllers/'.$controller.'.php';
        $ctrl_obj = new $controller();
        $ctrl_obj->$method();
        
        //test
    }
}
