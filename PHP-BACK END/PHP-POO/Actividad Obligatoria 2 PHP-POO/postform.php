<?php

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
    <style>
        body{ 
        margin: 0;
        height: 100vh;
        display: flex;        
        justify-content: center;
    }
    div{
        margin-top: 10px;
        margin-bottom: 10px;
        text-align: center;
    }
    form{
        margin-top: 10px;
        width: 500px;  
        height: 400px;
        background-color: rgb(233, 233, 233);
        border-radius: 10px;
    }
    h5{
        color: red;
    }
    mark{
        background-color: green;
        color: white;
    }

    </style>
  
    <title>Formulario en PHP</title>
</head>
<body>

    <div >
        <form method="POST" action="postform.php">
            <br>
            <h3>Bienvenido a Sistema</h3>
            <div class="form-group ml-5 mr-5">
                <br>
                <p> <mark> Los datos ingresados son: </mark> </p>
            </div>
            <div class="form-group ml-5 mr-5">
                <br>
             <h5>Tu Usuario: <?php echo $usuario ; ?> </h5>
            </div>
            <div class="form-group ml-5 mr-5">
                <br>
                <h5>Tu Clave: <?php echo $clave ; ?> </h5>
                <br>
            </div>
          </form>
    </div>  
    
</body>
</html>
