<?php
    // try{
    //     $nameUser = $_POST["nameUser"];
    //     $passwordUser = $_POST["passwordUser"];
    //     //print($username);
    //     //print($password);
    //     if($nameUser == "" || $nameUser == ""){
    //         $action = "usuario.php";
    //         $asd = 0;
    //     }else{
            
    //         include("controlador.php");
    //         $con = Conectar();
    //         $SQL = "SELECT * FROM Usuarios WHERE nameUser ='$nameUser'";
    //         $result = Ejecutar($con,$SQL);
    //         Desconectar($con);
    //         $fila = mysqli_fetch_row($result);
    //         //print($n);
    //         if($n == 1){
    //             if($fila[1]==$password){
    //                 $action = "verUsuario.php";
    //             }
    //             else{
    //                 $action = "usuario.php";
    //                 $asd = 1;
    //             }
    //         }
    //     }
        
    // }catch(Exception){
    //     $action = "usuario.php";
    //     $asd = 0;
    // }
    
?>

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
    <div class="contenido" id="user">
        <div id="cen">
            <form metod="POST" action="verUsuario.php">
                <div>
                    <a> Usuario: </a>
                    <input type="text" name="nameUser" id="usuario">
                </div>
                <div>
                    <a> Contrseña: </a>
                    <input type="password" name="passwordUser" id="password">
                </div>
                <div>
                    <!-- <?php if($action == "usuario.php" && $asd == 1){ ?>
                        <a>Usuario o contraseña incorrectos</a>
                    <?php } ?> -->
                </div>
                <div>
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
