<?php
if(isset($_POST['agregar'])){
    $nombre = $_POST['Nombre'];
    $primer_apellido = $_POST['Primer_apellido'];
    $segundo_apellido = $_POST['Segundo_apellido'];
    $correo = $_POST['Correo'];
    $numero_telefonico = $_POST['Numero_telefonico'];
    $direccion = $_POST['Direccion'];
    $imagen = $_POST['Imagen'];

    include('DAL/conexion.php');
    $conexion = Conecta();

    $sql = "INSERT INTO SweetSeasons.clientes (Nombre, Primer_apellido, Segundo_apellido, Correo, Numero_telefonico, Direccion, ruta_imagen) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssssss", $nombre, $primer_apellido, $segundo_apellido, $correo, $numero_telefonico, $direccion, $imagen);

    if ($stmt->execute()) {
        echo "Se han ingresado correctamente los datos";
    } else {
        echo "Error al ingresar los datos: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();

    header('Location: Clientes.php');
}
?>
