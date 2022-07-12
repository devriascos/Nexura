<?php

    require './App/App.php';
    require './Database/Db.php';
    require './App/Settings.php';
    require './Routes/Router.php';
    require './Models/Autoload.php'; 
    require './Controllers/Autoload.php'; 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
  
    // Check the URL request for the Routes handle
    $Router = new Router();
    $Router->IndexRequest();
    
    
    
    class Api
    {
        public $Version;
        public $Service_Status;

        public function __construct(String $Version, String $Service_Status){
            $this->Version = $Version;
            $this->Service_Status = $Service_Status;
        }

        public function SetVersion($New_Version){
            return $this->Version = $New_Version;
        }

        public function GetVersion(){            
            return $this->Version;
        }        

        public function SetServiceStatus($New_Status){
            return $this->Service_Status = $New_Status;
        }

        public function GetServiceStatus(){
            return $this->Service_Status;
        }

    }