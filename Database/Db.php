<?php

    class Db
    {    
        static function Connect(){            
            $Open_Db = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);            
            return !$Open_Db ? App::Debug(mysqli_connect_errno()) : $Open_Db;
        }

        static function Disconnect($Connection){
            return mysqli_close($Connection);            
        }
    }        