<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body class="page">
    <header class="cabeza">
        <div>
            <a class="boton" href="principal.php">Inicio</a>
            <a class="boton" href="usuario.php">Ingresar</a>
            <img src="https://ih1.redbubble.net/image.2415068711.7244/st,small,507x507-pad,600x600,f8f8f8.jpg" width="50px" height="50px">
        </div>
    </header>
    <div id="contenido">
        <?php 
        include("controlador.php");
        $con = Conectar();
        $SQL="SELECT * FROM casas;";
        $result = Ejecutar($con,$SQL);
        Desconectar($con);
        $numr = mysqli_num_rows($result);
       
         /*   if(isset($_GET['Criterio'])){
                include("controlador.php");
                $Atributo=$_GET['Atributo'];
                $Criterio=$_GET['Criterio'];
                $SQL="SELECT * FROM conductores WHERE $Atributo LIKE '%$Criterio%';";
                $con = Conectar();
                $result = Ejecutar($con,$SQL);
                //Se crea la tabla
                $enca = array("idConducto","nombre","fechaNacimiento","antiguedad","firma","domicilio","restriccion","foto","tipoSanguineo","numeroEmerencia","donador","Actualizar","Eliminar");
                $name = "conductores.php";
                Desconectar($con);
            } */
        ?>
        <div id="elementos" >
            <?php for($n = 0; $n<$numr; $n++){ 
                
                $fila = mysqli_fetch_row($result);
                ?>
                <div id="caja" >
                    <form method="POST" action="casa.php">
                        <div id="idCasa">
                            <input type="text" name="idCasa" value="<?php print($fila[0]) ?>" style="visibility:collapse;">
                            <a> Codigo: <?php print($fila[0]) ?> </a>
                        </div>
                        <div id="titulo">
                            <a> <?php print($fila[1]) ?> </a>
                        </div>
                        <div id="img">
                            <img src="<?php print($fila[2]) ?>" width="100px" height="100px" >
                        </div>
                        <div id="des">
                            <a> <?php print($fila[3]) ?> </a>
                        </div>
                        <div id="datosUser">
                            <a> <?php print($fila[4]) ?> </a>
                        </div>
                        <div>
                            <input type="submit" >
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>