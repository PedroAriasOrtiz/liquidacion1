<?php
include("conexion.php");
$con=conectar();

$nombre = $_POST['nombre'];
$identificacion = $_POST['identificacion'];
$salariobasico = $_POST['salariobasico'];
$horasdiurnasx = $_POST['horasdiurnasx'];
$horasnocturnasx = $_POST['horasnocturnasx'];
$horasdiunarfestivod = $_POST['horasdiunarfestivod'];
$horasnocturnafestivod = $_POST['horasnocturnafestivod'];


        $insertarUser = "INSERT INTO empleados VALUES ('$nombre','$identificacion','$salariobasico','$horasdiurnasx','$horasnocturnasx','$horasdiunarfestivod','$horasnocturnafestivod')";
        echo '<script>alert("USUARIO REGISTRADO EXITOSAMENTE")</script>';
        echo "<script>location.href='empleado.php'</script>";
        $query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>