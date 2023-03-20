<?php
    function Conectar(){
        $server = "127.0.0.1";
        $usuario = "root";
        $contrasenia = "";
        $nBD = "raiz";
        $con = mysqli_connect($server, $usuario, $contrasenia, $nBD);
        return $con;
    }
    function Ejecutar($con, $SQL){
        $result = mysqli_query($con, $SQL) or die (mysqli_error($con));
        return $result;
    }
    function Desconectar($con){
        mysqli_close($con);
    }
?>