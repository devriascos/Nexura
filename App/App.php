<?php

    class App
    {
        public function __construct(){}

        // Debug Data on screen
        public static function Debug($Data = NULL, $Include_Data_Type = false){
            print_r('<pre>');
            $Include_Data_Type ? var_dump($Data) : print_r($Data);
            print_r('<pre>');
        }

        //Get Data from input form/url post
        public static function Inputs(){            
            $Inputs = array_merge($_GET, $_POST);
            return (Object) $Inputs;
        }

        // Print a array like json object on screen
        public static function PrintJson($Array_Data){
            print_r(json_encode($Array_Data));
            exit;
        }

        public static function Request(String $Controller, String $Method){
            // Explode controller and action from request type Controller@Action
            $Action = '';
            switch ($Method) {
                case 'GET':
                    $Action = "Show";
                    break;  
                case 'POST':
                    $Action = "Create";
                    break;  
                case 'PUT':
                    $Action = "Update";
                    break; 
                case 'DELETE':
                    $Action = "Delete";
                    break;
                default:
                    http_response_code( 405 );
                    return App::PrintJson( ['Response'=>'Method not allowed'] );                    
                    break;
            }

            return $Controller::$Action();
        }

        public static function LoadLayout($View_Name, $Params = []){
            $Inputs = http_build_query( $Params );
            echo file_get_contents( $_ENV['APP_VIEWS_PATH'] . $View_Name . '.php?' . $Inputs );
        }
    }
    