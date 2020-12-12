<?php

require_once "../modelos/conexion.php";


if (isset($_POST['idCliente']) && !empty($_POST['idCliente']) && isset($_POST['fecha']) && !empty($_POST['fecha']) && isset($_POST['datos']) && !empty($_POST['datos']) && isset($_POST['costo']) && !empty($_POST['costo']) ) {


    $idCliente = $_POST["idCliente"];
    $fecha = $_POST["fecha"];
    $datos = $_POST["datos"];
    $costo = $_POST["costo"];
    $tabla = "remitos";

    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_cliente, fecha, datos, costo) VALUES ( :id_cliente , :fecha, :datos, :costo)");   
        
    $stmt->bindParam(":id_cliente", $idCliente, PDO::PARAM_STR);
    $stmt->bindParam(":fecha", $fecha, PDO::PARAM_STR);
    $stmt->bindParam(":datos", $datos, PDO::PARAM_STR);
    $stmt->bindParam(":costo", $costo, PDO::PARAM_STR);

  
    $stmt -> execute();

    return "ok";



    $stmt -> close();

    $stmt = null;   
}