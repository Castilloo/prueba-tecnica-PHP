<?php 

class Conexion {

    private $servidor = "localhost";
    private $usuario = "root";
    private $contrasena = "";
    private $conexion;

    public function __construct(){

        try {
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=pueba_tecnica_dev", $this->usuario, $this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "Falla de conexión". $e;
        }
    }

    public function ejecutar($sql){ //Insertar, eliminar, actualizar
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId(); 
    }

    public function consultar($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
} 

?>