<?php

    Class CrearUser

    {
        
        public $con;
        public function __construct()

        {
         
          $this->con=new Conexion();
           
        }

        public function CrearNuevo ($n, $c)

        {
           
           $consulta = "INSERT INTO `usuarios`( `Rol_idRol`, `NombreCl`, `Contrase`) VALUES (1, $n, $c )";

           $Result = $this->con->query($consulta);
           $this->con->close();
           return $Result;
 
            

        }


    }

?>