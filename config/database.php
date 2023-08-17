<?php

class Database 
{ 

    private $hostname = "localhost";
    private $database = "pinuniverse";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";

    function conectar()
{
    try {
        $conexion = "mysql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ];

        $pdo = new PDO($conexion, $this->username, $this->password, $options);
        return $pdo;
    } catch (PDOException $e) {
        echo 'Error de Conexion: ' . $e->getMessage();
        exit;
    }
}


}