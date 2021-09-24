<?php
/* Smarty version 3.1.39, created on 2021-09-24 06:05:04
  from 'C:\wamp64\www\proyectos\Practica\templates\Atencion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d6a90a81e46_24353305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df4507d00f3c77273855f3801d494ccc4dc6e854' => 
    array (
      0 => 'C:\\wamp64\\www\\proyectos\\Practica\\templates\\Atencion.tpl',
      1 => 1632462055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d6a90a81e46_24353305 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    

    <meta charset="utf-8">
    <title>ATENCION</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="estiloatencion.css">
</head>
  
<body>

    <nav>
        <div class="nav-wrapper blue darken-4">
          <li><a href="?class=Direcciones&method=VistaSalir">Salir</a></li>
        </div>
      </nav>
    
  
<div class="container" >


    

        <form action="?class=Atencion&method=Reclamo" method="POST" class="container__form">
            <br>
            
            <h5 class="left-align"></h5><h5 class="card-panel teal lighten-2" >INGRESE LA QUEJA</h5>
            <br><br><br>
            <label for="" class="container__label">NOMBRE</label>
            <input name="nombreA" type="text" class="container__input">
            <br><br><br><br>
            <label for="" class="container__label">QUEJA</label>
            <input name="queja" type="text" class="container__input">
            <br><br><br>
           
            <button class="btn waves-effect waves-light" type="submit" name="enviar">enviar
                <i class="material-icons right"></i>
              </button>

      </form>
</div>

</body>

</html><?php }
}
