<?php
include_once("../models/classCoordinador.php");
if(!isset($_REQUEST['id'])){
    $_REQUEST['id'] = 0;
}
if(!isset($_REQUEST["coordinador"])){
    if((($_REQUEST['id'] !=null))&&($_REQUEST["value"] == "Borrar")){
        $id = $_REQUEST['id'];
        $coordinador = new Coordinador();
        $coordinador->borrarCoordinador($id);
    }
    elseif(isset($_REQUEST["btngregarCoordinador"])){
        header("location:../view/coordinador/agregarCoordinador.php");
    }
    elseif(isset($_REQUEST["btnNewCoordinador"])){
        $nombre = $_REQUEST["nomCoordinador"];
        $apellido = $_REQUEST["apeCoordinador"];
        $correo = $_REQUEST["corCoordinador"];
        $telefono = $_REQUEST["telCoordiandor"];
        $coordinador = new Coordinador();
        $coordinador->agregarCoordinador($nombre, $apellido, $correo, $telefono);
    }
    elseif(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Actualizar")){
        header("location:../view/coordinador/editarCoordinador.php?id=".$_REQUEST['id']);
        $coordinador = new Coordinador();
    }
    elseif(isset($_POST["btnEditarCoordinador"])&&($_REQUEST["btnEditarCoordinador"]!=null)){
        $id = $_REQUEST["idCoordinadorEditar"];
        $nombre = $_REQUEST["nomCoordinadorEditar"];
        $apellido = $_REQUEST["apeCoordinadorEditar"];
        $correo = $_REQUEST["corCoordinadorEditar"];
        $telefono = $_REQUEST["telCoordinadorEditar"];
        $coordinador = new Coordinador();
        $coordinador->actualizarCoordinador($nombre, $apellido, $correo, $telefono, $id);
    }
}
?>