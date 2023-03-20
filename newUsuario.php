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
            <a class="boton" href="verUsuario.php">Ver mis publicaciones</a>
            <a class="boton" href="principal.php">Salir</a>
            <img src="https://ih1.redbubble.net/image.2415068711.7244/st,small,507x507-pad,600x600,f8f8f8.jpg" width="50px" height="50px">
        </div>
    </header>
    <div id="contenido">
        <div>
            <form method="GET" action="">
                <label>Identificador: </label>
                <input type="text" name = "idCasa">
                <br>
                <label>Titulo de la casa</label>
                <input type="text" name = "nombreCasa">
                <br>
                <label>Url de la imagen de la casa</label>
                <input type="text" name = "imgCasa">
                <br>
                <label>Descripcion de la casa</label>
                <input type="text" name = "descriptionCasa">
                <br>
                <label>Codigo de usuario: </label>
                <input type="text" name = "codeUser">
                <br>
                <input type="submit">
            </form>
        </div>
    </div>
</body>
</html>
<?php
    if (isset($_REQUEST['idCasa'])) {
        $idCasa = $_REQUEST['idCasa'];
        $nombreCasa = $_REQUEST['nombreCasa'];
        $imgCasa = $_REQUEST['imgCasa'];
        $descriptionCasa = $_REQUEST['descriptionCasa'];
        $codeUser = $_REQUEST['codeUser'];

        $SQL ="INSERT INTO `Casas` (`idCasa`, `nombreCasa`, `imgCasa`, `descriptionCasa`, `codeUser`) VALUES('$idCasa','$nombreCasa','$imgCasa', '$descriptionCasa','$codeUser');";
        //$con = mysqli_connect("127.0.0.1", "root", "", "controlVehicular30");
        //$result = mysqli_query($con, $SQL);
        //print($result);
        //mysqli_close($con);
        //print($SQL."<br>");
        include("controlador.php");
        $con = Conectar();
        $res = Ejecutar($con, $SQL);
        if($res == '1'){
            print("Registro exitoso");
        }else{
            print("Registro fallido");
        }
        Desconectar($con);
    }
    
?>