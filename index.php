<?php

    include('Autoload.php');
   //echo $_GET['class']."-".$_GET['method']."<br>";
    if(isset($_GET['class'])&& isset($_GET['method']))
        {

            $class=$_GET['class'];

            $method=$_GET['method'];

            //echo $class."-". $method."<br>";

        }
    else
        {

            $class="Home";

            $method="Inicio";

        }

    if(class_exists($class)&& method_exists($class, $method))
        {

           // echo $class."-". $method."<br>";

            $c= new $class();

            $c-> $method();

            
        }
    else
        {

            echo "Clase o metodo no existente";

        }

   

    

?>