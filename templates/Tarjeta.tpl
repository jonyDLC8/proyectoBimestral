<html>

<head>
    <meta charset="utf-8">
    <title>Pago</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Framework/Materialize/estiloatencion.css">
    
</head>

<body >
    <h1 align="center">Ingrese su tarjeta</h1>
      <br>   <br>   <br>

    <div class="row container">
        <form action="?class=tarjeta&method=DatosTarjeta" method="post" class="col s12">
        
          <div class="row">
            <div class="input-field col s6">
              <input placeholder="Nombre Completo" id="first_name" type="text" class="validate">
              
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input placeholder="Num. de tarjeta" id="codigo" type="text" maxlength="12" class="validate">
              
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input placeholder="Fecha de vencimiento" id="fecha" type="date" class="validate">
              
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input maxlength="4" placeholder="Codigo de seguridad" id="seguridad" type="text" class="validate">
              
            </div>
          </div>

            <input type="submit" value= "Pagar">

          
                
          </div>
        </form>
      </div>
            
</body>


</html>