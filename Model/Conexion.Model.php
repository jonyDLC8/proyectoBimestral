<?php 
Class Conexion extends mysqli

    {

        function __construct ()

        {

            $servidor="localhost";

            $pass="";

            $user="root";

            $DB="base_de_datos_proyecto";

            
            parent::__construct($servidor,$user,$pass,$DB);

            $this->query("SET NAMES 'utf8';");

            $this->connect_errno ? die('Error en la conexion') : $error='Conectado a '.$DB;

           //echo $error;

        }

    }



?>