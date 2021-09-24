<?php
/* Smarty version 3.1.39, created on 2021-09-24 06:45:26
  from 'C:\wamp64\www\proyectos\Practica\templates\telefonos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614d7406e871f7_68533959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49a60ed69caaf4ac91c04e349fc3927a8c99392e' => 
    array (
      0 => 'C:\\wamp64\\www\\proyectos\\Practica\\templates\\telefonos.tpl',
      1 => 1632465925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_614d7406e871f7_68533959 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
<meta charset="utf-8">
<title>telefonos en lista </title>
<link type="text/css" href="Framework/Materialize/css/materialize.min.css" rel="stylesheet">
<link type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">


</head>
<body>

<body>
<div class="main-wrapper">
<h1 align="center">lista de telefonos</h1>
<br><br>
<div class="container">
        
      
<form action="" method="post">
  <div class="col-xs-3">
    <input class="form-control" name="Marcas" type="text" placeholder="Marcas">
  </div>
  <div class="col-xs-3">
    <input class="form-control" name="Descripcion" type="text" placeholder="Descripcion">
  </div>  
  <div class="col-xs-3">
    <input class="form-control" name="Precio" type="text" placeholder="Precio">
  </div> 
	<input type="submit" name="submit" class="btn btn-primary" value="Insertar">
</form>

</div>
<br>

</body><?php }
}
