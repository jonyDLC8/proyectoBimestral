<?php
class Direcciones
{
    
    public $smarty;

    public function __construct()

        {
        $this->smarty =new Smarty();
       
        
        }
        
    public function VistaPlanes()
    {

        $this->smarty->display("Planes.tpl");

    }

    public function VistaTarjeta()
    {

        $this->smarty->display("Tarjeta.tpl");

    }

    public function VistaAtencion()
    {

        $this->smarty->display("Atencion.tpl");

    }

    public function VistaSalir()
    {

        $this->smarty->display("Home.tpl");

    }

    public function VistaTelefonos()
    {

        $this->smarty->display("telefonos.tpl");

    }


}



?>