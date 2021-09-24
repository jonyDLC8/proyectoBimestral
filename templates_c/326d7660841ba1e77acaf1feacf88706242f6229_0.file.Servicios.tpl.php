<?php
/* Smarty version 3.1.39, created on 2021-09-24 06:42:07
  from 'C:\wamp64\www\proyectos\Practica\templates\Servicios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d733f442a57_41070077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '326d7660841ba1e77acaf1feacf88706242f6229' => 
    array (
      0 => 'C:\\wamp64\\www\\proyectos\\Practica\\templates\\Servicios.tpl',
      1 => 1632465699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d733f442a57_41070077 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
  <html>
    <head>
      <style>
          .fondo{
              background-image: linear-gradient(135deg, #00B7D3, #505488, #2F3F80, #161569, #5A4894, #A950A1, #FF7CAE);
              background-size: 500%;

              
          }

      </style>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <link type="text/css" rel="stylesheet" href="Framework/Materialize/css/materialize.min.css"  media="screen,projection"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

        <body class="fondo">
            <!--encabezado aqui-->

         <div class="container">
            <h1 style="color: white;" class="center-align">Bienvenido a EJP'S Phone</h1>
             <div class="row">

                    <div class="col s4">

                        <div class="card">
                            <div class="card-image">

                                 <img src="Framework/media/plan.jpeg">
                                 <span class="left-align" class="card-title"><h5 style="color: #E1CB1A;"> &nbsp Telefonia movil</h5> </span>

                           </div>
                            <div class="card-content">
                                    <br>    
                                 <p>Puedes contratar tus planes de telefonia movil aqui!</p>
                                    <br>
                             </div>

                             <div class="card-action">
                                   <a href="?class=Direcciones&method=VistaPlanes">Ver</a>
                             </div>

                         </div>
                            
                     </div>
                    <div class="col s4">

                     <div class="card">
                            <div class="card-image">

                                 <img src="Framework/media/residencial.jpg">
                                 <span class="left-align" class="card-title"><h5 style="color: #E1CB1A;"> &nbsp Internet Residencial</h5> </span>

                           </div>
                            <div class="card-content">

                                 <p>Contrata tu internet residencial con velocidad 5G hasta 100mb</p>

                             </div>

                             <div class="card-action">
                                   <a href="?class=Direcciones&method=VistaPlanes"">Ver</a>
                             </div>

                     </div> 
                    </div>
                    <div class="col s4">
                         
                    <div class="card">
                            <div class="card-image">

                                 <img src="Framework/media/Telefonos.jpg">
                                 <span class="left-align" class="card-title"><h5 style="color: #E1CB1A;"> &nbsp Equipos telefonicos</h5> </span>

                           </div>
                            <div class="card-content">

                                 <p>Encuentra tus marcas de telefonos aqui, en un precio accesible</p>

                             </div>

                             <div class="card-action">
                                   <a href="?class=Direcciones&method=VistaTelefonos">Ver</a>
                             </div>

                     </div> 

                    </div>

                </div>

            </div>


        <?php echo '<script'; ?>
 type="text/javascript" src="Framework/Materialize/js/materialize.min.js"><?php echo '</script'; ?>
>

        </body>
  </html><?php }
}
