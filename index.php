<?php   

if($_POST){
    $nombre = $_POST['nombre'];
    $email = $_POST['email']; 
    $sexo = $_POST['sexo']; 
    $area = $_POST['area']; 
    $descripcion = $_POST['descripcion']; 
    $rol = "rol"; 
    echo $nombre;  

    $objConexion = new Conexion();
    $sql = "INSERT INTO `empleado` (`id`, `nombre`, `email`, `sexo`, `area_id`, `boletin`, `descripcion`) VALUES (NULL, 'Diego Castillo', 'delcaos12@gmail.com', 'M', '2', NULL, 'Dearrollo web');";
    $objConexion->ejecutar($sql);
    header("location: portfolio.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba técnica PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<br/>
<br/>
<div class="container">
<h1>Crear empleado</h1>
    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>Los datos con asterisco(*) son obligatorios</strong> 
                </div>
                <div class="card-body">

                    <form action="admin/index.php" method="post">
                        Nombre completo*: 
                        <input class="form-control" type="text" name="nombre" id="">
                        <br/>
                        Correo electrónico*:
                        <input class="form-control" type="text" name="email" id="">
                        <br/>
                        Sexo*:
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sexo" id="" value="m">
                          <label class="form-check-label" for="sexo">
                            Masculino
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sexo" id="" value="F">
                          <label class="form-check-label" for="sexo">
                            Femenino
                          </label>
                        </div>
                        <br/>
                        Área*:
                        <div class="mb-3">
                            <select class="form-select" name="area" id="">
                                <option selected>Seleccionar</option>
                                <option value="">Administración</option>
                                <option value="">Recursos humanos</option>
                                <option value="">Desarrollo</option>
                                <option value="">Publicidad</option>
                            </select>
                        </div>
                        Descripción*:
                        <textarea class="form-control" name="descripcion" id="" cols="30" rows="3"></textarea>
                        <br/>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="">
                          <label class="form-check-label" for="">
                            Deseo recibir boletín informativo
                          </label>
                        </div>
                        <br/>
                        Roles*:
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="" name="rol">
                          <label class="form-check-label" for="">
                            Profesional de proyectos - Desarrollador
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="" name="rol">
                          <label class="form-check-label" for="">
                            Gerente estratégico
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="" checked>
                          <label class="form-check-label" for="">
                            Auxiliar administrativo
                          </label>
                        </div>
                        <br/>
                        <button class="btn btn-success">Enviar proyecto</button>
                    </form>
                </div>
            </div> 
        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($proyectos as $proyecto){ ?>
                        <tr class="">
                            <td scope="row"><?php echo $proyecto['id']; ?></td>
                            <td><?php echo $proyecto['nombre']; ?></td>
                            <td>
                                <img width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="">
                                <?php echo $proyecto['imagen']; ?>
                            </td>
                            <td><?php echo $proyecto['descripcion']; ?></td>
                            <td>
                                <a name="" 
                                    id="" 
                                    class="btn btn-danger" 
                                    href="?borrar=<?php echo $proyecto['id']; ?>" 
                                    role="button">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>        
        </div>
    </div>
</div>
</body>
</html>