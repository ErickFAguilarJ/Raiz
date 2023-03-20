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
    
    <div class="contenido">
    <header class="cabeza">
        <div>
        <a class="boton" href="newUsuario.php">Nueva publicacion</a>
        <a class="boton" href="principal.php">Salir</a>
            <img src="https://ih1.redbubble.net/image.2415068711.7244/st,small,507x507-pad,600x600,f8f8f8.jpg" width="50px" height="50px">
        </div>
    </header>
    <div id="contenido">
        <?php
        include("controlador.php");
        $nameUser = $_GET["nameUser"];
        $con = Conectar();
        $SQL="SELECT * FROM Usuarios WHERE nameUser='$nameUser';";
        $result = Ejecutar($con,$SQL);
        $fila = mysqli_fetch_row($result);
        $SQL2="SELECT * FROM casas WHERE codeUser='$fila[3]';";
        $result2 = Ejecutar($con,$SQL2);
        Desconectar($con);
        $numr = mysqli_num_rows($result2);
        
        ?>
        <div id="elementos" >
            <?php for($n = 0; $n<$numr; $n++){ ?>
                <?php $fila2 = mysqli_fetch_row($result2); ?>
                <div id="caja" >
                    <div id="titulo">
                        <a> <?php print($fila2[1]) ?> </a>
                    </div>
                    <div id="img">
                        <img src="<?php print($fila2[2]) ?>" width="100px" height="100px" >
                    </div>
                    <div id="des">
                        <a> <?php print($fila2[3]) ?> </a>
                    </div>
                    <div id="datosUser">
                        <a> <?php print($fila2[4]) ?> </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
        
    </div>
</body>
</html>