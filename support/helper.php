<?php 

use Slim\Views\PhpRenderer;

if(!method_exists('view')){

    function view($response, $template, $data){
        $renderer = new PhpRenderer(APP_PATH);
        return $renderer->render($response, $template, $data);
    }
}

if(!method_exists('config')){

    function config($configFile){
        return include(CONFIG_PATH . '/' . $configFile);
    }

}

if(!method_exists('route')){

    function route(){
        
    }

}

if(!method_exists('asset')){

    function asset(){
        
    }

}