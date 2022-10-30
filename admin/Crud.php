<?php include("Conexion.php") ?>
<?php

class Crud extends Conexion {

    private $nombre;
    private $email;
    private $sexo;
    private $area_id;
    private $boletin;
    private $descripcion;
    private $rol;

    public function guardar(){
        $this->nombre = $nombre;
        $this->email = $email;
        $this->sexo = $sexo;
        $this->area_id = $area_id;
        $this->descripcion = $descripcion;
        $this->rol = $rol;

        $sql = "INSERT INTO `empleado` (`id`, `nombre`, `email`, `sexo`, `area_id`, `boletin`, `descripcion`) VALUES (NULL, 'Diego Castillo', 'delcaos12@gmail.com', 'M', '2', NULL, 'Dearrollo web');";

    }

}


$crud = new Crud();
echo $crud->guardar();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hola
</body>
</html>