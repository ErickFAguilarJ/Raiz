<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="cabeza">
        <div>
            <a class="boton" href="principal.php">Inicio</a>
            <a class="boton" href="usuario.php">Ingresar</a>
            <img src="https://ih1.redbubble.net/image.2415068711.7244/st,small,507x507-pad,600x600,f8f8f8.jpg" width="50px" height="50px">
        </div>
    </header>
    <div id="contenido">
        <?php 
        $idCasa = $_POST["idCasa"];
        include("controlador.php");
        $con = Conectar();
        $SQL="SELECT * FROM casas WHERE idCasa ='$idCasa';";
        $result = Ejecutar($con,$SQL);
        Desconectar($con);
        $fila = mysqli_fetch_row($result);
        ?>
        <div id="elementos" >
            <div >
                <div id="idCasa">
                    <a> Codigo: <?php print($fila[0]) ?> </a>
                </div>
                <div id="titulo">
                    <a> <?php print($fila[1]) ?> </a>
                </div>
                <div id="img">
                    <img src="<?php print($fila[2]) ?>" width="500px" height="500px" >
                </div>
                <div id="des">
                    <a> <?php print($fila[3]) ?> </a>
                </div>
                <div id="datosUser">
                    <a> <?php print($fila[4]) ?> </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>