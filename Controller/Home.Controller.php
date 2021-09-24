<?php

    Class Home

    {
        public $smarty;
        public function __construct()

        {
            $this->smarty = new Smarty();
            //$Con=new Conexion();
        }

        public function Inicio()

        {

           $this->smarty->assign('title','Login');

            $this->smarty->display('Home.tpl');

        }


    }

?>