<html>

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
          



        <script type="text/javascript" src="materialize/js/materialize.min.js">
        M.AutoInit();

        </script>
    </body>

</html>