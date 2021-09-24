<?php

    Class Atencion

    {
        
        public $smarty;
        public $reclamo;
        public function __construct()

        {
            
            $this->smarty = new Smarty();
            $this->reclamo=new Atencion();
           
        }

        public function Reclamo()

        {
            $Nombre = $_POST['NombreA'];
            $Queja = $_POST['queja'];
           
            $ResultL = $this->reclamo->Reclamo($Nombre, $Queja);
            

            if($ResultL){

                
                $this->smarty->display('Home.tpl');
            
            }
        }


    }



?>