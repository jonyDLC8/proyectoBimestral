<html>

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

</html>