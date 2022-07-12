<?php

    class EmpleadoModel
    {
        public function __construct($User = []){
            $this->Name = $User['nombre'];
            $this->Email = $User['email'];
            $this->Sexo = $User['sexo'];
            $this->Area_Id = $User['area_id'];
            $this->Boletin = $User['boletin'];
            $this->Descripcion = $User['descripcion'];
        }

        //Función que muestra el nuevo usuario
        public static function AllOrOne(){
            
            $Db = Db::Connect();
            $Empleados = [];

            /* recuperar todas las filas de Empleados */
            $empleados = "SELECT * FROM empleado";
            
            //Si está haciendo búsqueda de un ID
            if(isset(App::Inputs()->id)){
                $empleados .= ' WHERE id = '.App::Inputs()->id;
            } 

            if ($resultado = $Db->query($empleados)) {
                while($Empleado = $resultado->fetch_assoc()){
                    $Empleados[] = $Empleado;
                }
                /* liberar el conjunto de resultados */
                $resultado->close();
            }
                
            return $Empleados;
        }
    }