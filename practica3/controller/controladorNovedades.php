<?php
include_once("../models/classNovedad.php");
if(!isset($_REQUEST['id'])){
    $_REQUEST['id'] = 0;
}
if(!isset($_REQUEST["novedad"])){
    if(($_REQUEST['id'] !=null)&&($_REQUEST["value"] == "Borrar")){
        $id = $_REQUEST['id'];
        $novedad = new Novedades();
        $novedad->borrarNovedades($id);
    }
    elseif(isset($_REQUEST["btnAddNovedades"])){
        header("location:../view/novedades/agregarNovedades.php");
    }
    elseif(isset($_REQUEST["btnNewNovedades"])){
        $tipo = $_REQUEST["tipoNovedades"];
        $novedad = $_REQUEST["Novedades"];
        $novedades = new Novedades();
        $novedades->agregarNovedades($tipo, $novedad);
    }
    elseif(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Actualizar")){
        header("location:../view/novedades/editarNovedades.php?id=".$_REQUEST['id']);
        $novedades = new Novedades();
    }
    elseif(isset($_REQUEST["btnEditarNovedades"])&&($_REQUEST["btnEditarNovedades"]!=null)){
        $id = $_REQUEST["idNovedadesEditar"];
        $tipo=$_REQUEST["tipoNovedadesEditar"];
        $descnovedad = $_REQUEST["NovedadesEditar"];
        $novedades = new Novedades();
        $novedades->actualizarNovedades($tipo, $descnovedad, $id);
    }
}
?>