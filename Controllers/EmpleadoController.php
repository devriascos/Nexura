<?php


    use EmpleadoModel;

    class EmpleadoController
    {

        public static function Show(){
            return EmpleadoModel::AllOrOne();
        }

        public static function Create(){
            return [];
        }

    }