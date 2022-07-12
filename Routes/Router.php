<?php
    class Router
    {

        public function __construct(){
            $this->RequestUri = parse_url($_SERVER['REQUEST_URI'])['path'];
            $this->RequestMethod = $_SERVER['REQUEST_METHOD'];
        }

        // Index all request from root project
        public function IndexRequest(){
            // Set default API instance info
            $Api = new Api( $_ENV['API_VERSION'], $_ENV['APP_HEALTH_STATUS'] );
            
            // Get the URI and Method of the request
            $RequestUri = $this->RequestUri;
            $RequestMethod = $this->RequestMethod;
            
            // Load the Api Path from ENV
            $Path = $_ENV['APP_PATH_URI'];
            switch ($RequestUri) {
                case $Path:
                case $Path.'/':
                    // Response body by default                    
                    App::LoadLayout('Index', ['nombre'=>'Fernando','apellido'=>'riascos']);
                    break;
                case $Path.'/empleados':                    
                    $empleados = App::Request('EmpleadoController', $RequestMethod);
                    App::LoadLayout('Empleados', $empleados);
                break;      
                case $Path.'/empleados/editar':              
                    $empleado = App::Request('EmpleadoController', $RequestMethod);
                    App::LoadLayout('EditarEmpleado', $empleado);
                break;                               
                default:
                    http_response_code(404);
                    App::PrintJson(["Error"=>"URI not found"]);                    
                    break;
            }
        }
    }
    