<?php

    class Home
    {
        public function Inicio()
        {
            $smarty = new smarty();
            $smarty -> display('home.tpl');
        }
    }
?>
