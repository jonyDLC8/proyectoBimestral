<?php
/* Smarty version 3.1.39, created on 2021-09-24 03:18:58
  from 'C:\wamp64\www\proyectos\Practica\templates\newuser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d43a20171e1_86112765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '181b0230b9b52e7202ea2e94280b86a2ef3e548c' => 
    array (
      0 => 'C:\\wamp64\\www\\proyectos\\Practica\\templates\\newuser.tpl',
      1 => 1632453529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d43a20171e1_86112765 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <meta charset="utf-8">
    <title>Pago</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Framework/Materialize/estiloatencion.css">
    

    <nav>
        <div class="nav-wrapper blue darken-4">
          <form>

          </form>
        </div>
      </nav>
    


</head>

<body  >
    
      <br>   <br>   <br>
      <br>   <br>   <br>

      
      <div class="container">
        <div class="row container, card-panel hoverable"  style="background-color: #191849 " >
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">

            <form action="?class=CrearUser&method=CrearNuevo" method="post">
              <input placeholder="Nombre de usuario" name="NombreCl"  id="first_name" type="text" class="validate">
              
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input placeholder="contraseña" name="Contrase" id="contra" type="text" class="validate">
              
            </div>
          </div>
          
          <input type="submit" value= "ingresar">

            </form>

          </div>
        </form>
      </div>
    </div>

      <?php echo '<script'; ?>
 type="text/javascript" src="materialize/js/materialize.min.js">
        M.AutoInit();

        <?php echo '</script'; ?>
>
            
</body>


</html><?php }
}
