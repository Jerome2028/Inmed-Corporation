<?php

class Router {

    private $request;

    public function __construct($request){
        $request = explode("/", $request);
        $this->request = $request[2];
             // $this->request = $request[4];
    }

    public function getView(){
        
        $view = $this->request;

        switch($view){
            case '':
            case '/':
            case 'home':
                require 'page/home.php';
                break;
                
            case 'about-us':
                require 'page/about_us.php';
                break;

            case 'brochures&catalog':
                require 'page/resources.php';
                break;

            case 'career':
                require 'page/career.php';
                break;

            case 'reseller':
                require 'page/reseller.php';
                break;

            case 'visitors':
                require 'page/visitors.php';
                break;

            case 'manual':
                require 'page/manuals.php';
                break;


            default:
                require 'page/error.php';
                break;
        }
    }

}