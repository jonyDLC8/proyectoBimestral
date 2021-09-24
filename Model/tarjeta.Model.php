<?php

    Class tarjeta

    {
        
        public $con;
        public function __construct()

        {
         
          $this->con=new Conexion();
           
        }

        public function DatosTarjeta($c, $n, $f, $Cs)

        {
           
           $consulta = "INSERT INTO `tarjeta`(`Codigo`, `Nombre`, `Fecha`, `CodigoSeg`) VALUES ($c, $n, $f, $Cs)";


           $Result = $this->con->query($consulta);
           $this->con->close();
           return $Result;
 
            

        }


    }

?>