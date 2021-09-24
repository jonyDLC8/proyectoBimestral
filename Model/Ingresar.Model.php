<?php 


     Class Ingresar{

     public $con;

          public function __construct()
          {

               $this->con=new Conexion();

          }
          
          public function BuscarUsuario($N, $C)
          {

               $consulta="SELECT * FROM `usuarios` WHERE `NombreCl`='$N'  AND Contrase ='$C'" ;
              
               $Result = $this->con->query($consulta) ;
               $this->con->close();
               return $Result;
          }

     
     }

?>