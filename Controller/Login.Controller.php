<?php

    Class Login

    {
        public $smarty;
        public $Ingresar;

        public function __construct()

        {
          $this-> smarty =new Smarty();
          $this->Ingresar=new Ingresar();
           
        }

        public function BuscarUsuario()

        {
           $Usuario = $_POST['NombreCl'];
           $Contrasena = $_POST['Contrasena'];

            $ResultL = $this->Ingresar->BuscarUsuario($Usuario, $Contrasena);
            
            if($ResultL->num_rows==1){

                $User=mysqli_fetch_assoc($ResultL);
                if($User['Rol_idRol'] == 1){

                    $this->smarty->display('turnostabla.tpl');

                }
                else{
 
                    $this->smarty->display('Servicios.tpl');

                }
                
            }
            else if($ResultL->num_rows>1){

                echo "Usuario duplicado";
                $this->smarty->display('Home.tpl');

            }
            else{
                
                $this->smarty->display('Home.tpl');
                
            }

            

        }


    }

?>