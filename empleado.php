
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Información Empleados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        
        <div class="container mt-5">
            <form class="text-start" method="POST">
            <div class="row">

            <h2>Validación de Información</h2>
            <div class="mb-3 col-md-6">
                <label for="nombreInput" class="form-label">Nombre del empleado</label>
                <input type="text" name="nombre" class="form-control" id="nombreInput" aria-describedby="emailHelp">
                
            </div>

            <div class="mb-3 col-md-6">
                <label for="identificacionInput" class="form-label">Cédula del empleado</label>
                <input type="number" name="identificacion" class="form-control" id="identificacionInput" aria-describedby="emailHelp">
                
            </div>

            <div class="mb-3 col-md-6">
                <label for="salariobasicoInput" class="form-label">Salario básico del empleado</label>
                <input type="number" name="salariobasico" class="form-control" id="salariobasicoInput" aria-describedby="emailHelp">
                
            </div>

            <div class="mb-3 col-md-6">
                <label for="horasdiurnasxInput" class="form-label">Número de horas extras diurnas trabajadas </label>
                <input type="number" name="horasdiurnasx" class="form-control" id="horasdiurnasxInput" aria-describedby="emailHelp">
                
            </div>

            <div class="mb-3 col-md-6">
                <label for="horasnocturnasxInput" class="form-label">Número de horas extras nocturnas trabajadas </label>
                <input type="number" name="horasnocturnasx" class="form-control" id="horasnocturnasxInput" aria-describedby="emailHelp">
                
            </div>

            <div class="mb-3 col-md-6">
                <label for="horasdiunarfestivodInput" class="form-label">Número de HE.FESTIVA/DOMINICAL DIURNA</label>
                <input type="number" name="horasdiunarfestivod" class="form-control" id="horasdiunarfestivodInput" aria-describedby="emailHelp">
                
            </div>

            <div class="mb-3 col-md-6">
                <label for="horasnocturnafestivodInput" class="form-label">Número de HE.FESTIVA/DOMINICAL NOCTURNA</label>
                <input type="number" name="horasnocturnafestivod" class="form-control" id="horasnocturnafestivodInput" aria-describedby="emailHelp">
                
            </div>

        </div>
       
        <button type="submit" class="btn btn-primary">Verificar Cuenta</button>
            </form>
            <section id="cont-global" class="text-center cont-tabla">
                <div class="container-fluid">
                    <h2>INFO HORAS EMPLEADO</h2>
                    <table class="table table-bordered border-primary table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Identificacion</th>
                                <th scope="col">Salario Basico</th>
                                <th scope="col">Horas Diurnas x</th>
                                <th scope="col">Horas Nocturnas x</th>
                                <th scope="col">Horas Diurnas Festivo</th>
                                <th scope="col">Horas Nocturnas Festivo</th>
                                <th scope="col">total Recargo</th>
                                <th scope="col">total Deducciones</th>
                                <th scope="col">Salario Neto</th>
                            </tr>
                        </thead>
        
                        <tbody>
        
                            <?php
                                $conexion ='';
                                $f='';
                                require("conexion.php");
                                $mostrarEmpleado = "SELECT * FROM empleados";
                                $resultado = $conexion->query($mostrarEmpleado);
                                while ($f = mysqli_fetch_array($resultado)) {
                            ?>
        
        
                            
                            <tr>
                                <td><?php echo $f['nombre'] ?></td>
                                <td><?php echo $f['identificacion'] ?></td>
                                <td><?php echo $f['salarioBasico'] ?></td>
                                <td><?php echo $f['horasdiurnasx'] ?></td>
                                <td><?php echo $f['horasnocturnasx'] ?></td>
                                <td><?php echo $f['horasdiunarfestivod'] ?></td>
                                <td><?php echo $f['horasnocturnafestivod'] ?></td>
                                <td><?php echo $f['totalRecargo'] ?></td>
                                <td><?php echo $f['totalDeducciones'] ?></td>
                                <td><?php echo $f['salarioNeto'] ?></td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </body>
</html>