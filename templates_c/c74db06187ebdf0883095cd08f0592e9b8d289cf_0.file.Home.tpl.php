<?php
/* Smarty version 3.1.39, created on 2021-09-24 03:54:04
  from 'C:\wamp64\www\proyectos\Practica\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d4bdcb19736_26960655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c74db06187ebdf0883095cd08f0592e9b8d289cf' => 
    array (
      0 => 'C:\\wamp64\\www\\proyectos\\Practica\\templates\\Home.tpl',
      1 => 1632455635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d4bdcb19736_26960655 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

    <title> Login </title>

    <head>
        <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 

        <style> 
            .body{
                margin-left: 5cm;
                margin-right: 5cm;
                background-color: white ;
            }
        </style>
    </head>

    

   

    <body class="body">
        
        <div  class="container">
            <h1 class="center-align" style="color: black">Bienvenido</h1>
        
            <div class="row">

                <div class="col s12 m4 l2"></div>
                    <div class="col s12 m4 l8">  

                        <div align = "center" style="background-color: #191849 " class="card-panel hoverable">  
                            <h3 class="center-align" style="color: #FDF6F6 ;" >Inicie sesion para continuar</h3>
                            <br><br>
                            <div class="row">
                                <div class="col s3 "></div>
                                <div class="col s6 ">

                                    <form action="?class=Login&method=BuscarUsuario" method="post">

                                        <input  name="NombreCl" type="text" class="validate" required>
                                        <label for="first_name">Usuario</label>
                                        
                                        <br>
                                        
                                        <input name ="Contrasena" type="text" class="validate" required>
                                        <label for="last_name">Contraseña</label>

                                        <br><br>

                                       <input type="submit" value= "ingresar">
                                    </form>

                                </div>


                                <div class="col s3"></div>
                            </div>

                           
                        </div>

                    </div>
                <div class="col s12 m4 l2"></div>

            </div>
        </div>
        </body>
          



        <?php echo '<script'; ?>
 type="text/javascript" src="materialize/js/materialize.min.js">
        M.AutoInit();

        <?php echo '</script'; ?>
>
    </body>

</html><?php }
}
