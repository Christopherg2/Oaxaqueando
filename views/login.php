<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sesiones</title>

    <link  rel = "stylesheet" href ="public/css/estilazo.css">
</head>
<body background="3409778.jpg">

    <form  id="loginp" action ="" method ="POST">
       <?php

            if ( isset ( $errorLogin )) {
                echo  $errorLogin ;
            }

       ?>
   
    <center>
    <img src="Oaxaqueando.png" >
    <center>
        <h2>Iniciar sesion</h2>
        <p> Nombre de usuario: <br>
        <input  type = "text" name = "username" > </p >
        <p> Contraseña: <br>
        <input  type = "password" name = "password" > </p >
        <p  class = " center " > <input  type ="submit" value = " Iniciar sesión " > 
        </p >
    </form>
    <input type="button" onClick= "location.href='Sign UP.php';" value="Registrate">   
</body>
</html>