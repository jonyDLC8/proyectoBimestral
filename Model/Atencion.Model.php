<?php 

Class Atencion{

    public $con;

         public function __construct()
         {

              $this->con=new Conexion();

         }
         
         public function Reclamo($NL, $Q)
         {

              $consulta="INSERT INTO `atencion`( `NombreCl`, `Queja`) VALUES ($NL, $Q)" ;
             
              $Result = $this->con->query($consulta) ;
              $this->con->close();
              return $Result;
         }

    
    }


   


?>