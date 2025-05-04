<?php 

use Slim\Views\PhpRenderer;

if(!function_exists('view')){
    function view($response, $template, $data){
        $renderer = new PhpRenderer(APP_PATH . 'pages/');

        $template = rtrim($template, '/');

        return $renderer->render($response, $template, $data);
    }
}

if(!function_exists('config')){
    function config($configFile){

        $configFile = rtrim($configFile, '/');

        return include(CONFIG_PATH . $configFile);
    }
}

if(!function_exists('component')){
    function component($path){
        $componentPath = APP_PATH . 'components/';

        $path = rtrim($path, '/');

        return include($componentPath . $path);
    }
}

if(!function_exists('url')){
    function url(string $path) : void 
    {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';

        $domain = $_SERVER['HTTP_HOST'];

        $baseUrl = $protocol . '://' . $domain;

        if( empty( $path ) ){
            echo $baseUrl;
        }

        $cleanPath = ltrim($path, '/');

        echo $baseUrl  . '/' . $cleanPath ;
    }
}

if(!function_exists('asset')){
    function asset(string $path) : void 
    {
        $assetFolder = '/assets';

        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    
        $domain = $_SERVER['HTTP_HOST'];
    
        $baseUrl = $protocol . '://' . $domain;
    
        if( empty( $path ) ){
            echo $baseUrl;
        }
    
        $cleanPath = ltrim($path, '/');
    
        echo $baseUrl . $assetFolder . '/' . $cleanPath ;
    }
}