<?php
include_once("../models/classAlumno.php");
if(!isset($_REQUEST['id'])){
    $_REQUEST['id'] = 0;
}
if(!isset($_REQUEST["alumno"])){
    if((($_REQUEST['id']!=null))&&($_REQUEST["value"]=="Borrar")){
        $id = $_REQUEST['id'];
        $alumno = new Alumno();
        $alumno -> borrarAlumno ( $id );
    }
    elseif(isset($_REQUEST["btnagregarAlumno"])){
        header("location:../view/alumno/agregarAlumno.php");
    }
    elseif(isset($_REQUEST["btnNewAlumno"])){
        $nombre = $_REQUEST["nomAlumno"];
        $apellido = $_REQUEST["apeAlumno"];
        $correo = $_REQUEST["corAlumno"];
        $telefono = $_REQUEST["telAlumno"];
        $programa = $_REQUEST["progAlumno"];
        $alumno = new Alumno();
        $alumno->agregarAlumno($nombre, $apellido, $correo, $telefono, $programa);
    }
    if(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Actualizar")){
        header("location:../view/alumno/editarAlumno.php?id=".$_REQUEST['id']);
        $alumno = new Alumno();
    }
    elseif(isset($_POST["btnEditarAlumno"])&&($_REQUEST["btnEditarAlumno"]!=null)){
        $id = $_REQUEST["idAlumnoEditar"];
        $nombre = $_REQUEST["nomAlumnoEditar"];
        $apellido = $_REQUEST["apeAlumnoEditar"];
        $correo = $_REQUEST["corAlumnoEditar"];
        $telefono = $_REQUEST["telAlumnoEditar"];
        $programa = $_REQUEST["progAlumnoEditar"];
        $alumno = new Alumno();
        $alumno->actualizarAlumno($nombre, $apellido , $correo , $telefono , $programa, $id);
    }
}
?>