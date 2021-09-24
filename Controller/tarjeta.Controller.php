<?php

    Class tarjeta

    {
        public $smarty;
        public $pagar;

        public function __construct()

        {

          $this->smarty = new Smarty();
          $this->pagar = new tarjeta();
           
        }

        public function DatosTarjeta()

        {
           $nombre = $_POST['Nombre'];
           $numerotar = $_POST['Codigo'];
           $fecha = $_POST['Fecha'];
           $seguridad = $_POST['CodigoSeg'];

           $resultadoj = $this->pagar->DatosTarjeta($nombre, $numerotar, $fecha, $seguridad);

            if($resultadoj){

                echo "<script>alert('Se realizo el pago con exito'); </script>";
                $this->smarty->display('Servicio.tpl');
            
            } else{
            
                echo "<script>alert('error');</script>";
                $this->smarty->display('Tarjeta.tpl');
            }
            
            
            

        }


    }

?>