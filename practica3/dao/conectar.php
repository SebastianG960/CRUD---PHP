<?php
    function connect(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "practica3";
        try{
            $pdo = new PDO('mysql:host='.$host.';dbname='.$database,$user,$pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }catch(PDOexception $e){
            die($e->getmessage());
        }
    }
?>