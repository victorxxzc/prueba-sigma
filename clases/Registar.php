<?php 

include '../clases/Conexion.php';
$c=new conectar();
$conexion=$c->conexion();


$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$departamento = $_POST['departamento'];
$ciudad = $_POST['ciudad'];

$insertar = "INSERT INTO contacts (name,email,state,city) VALUES ('$nombre','$correo','$departamento','$ciudad')";

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    
 echo " 
 <script> alert('Registro no exitoso')</script>
 ";
} else{
    echo " 
    <script> alert('Registro  exitoso')</script>
    ";
    
}

mysqli_close($conexion);

?>