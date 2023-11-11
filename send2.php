<?php
include("conexion2.php");

if (isset($_POST['send2'])) {

    if (
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['message']) >= 1

    ) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $message = trim($_POST['message']);
        $fecha = date("d/m/y");

        $consulta = "INSERT INTO contactanos (nombre, email, telefono, mensaje, fecha) 
    VALUES('$name', '$email', '$phone', '$message', '$fecha')";
        $resultado = mysqli_query($conex2, $consulta);
        if ($resultado) {
?>
            <h3 class="success">recibimos tus datos pronto nos comunicaremos contigo</h3>
        <?php
        } else {
        ?>
            <h3 class="error">ocurrio un error</h3>
        <?php
        }
    } else {
        ?>
        <h3 class="error">llena todos los campos</h3>
<?php
    }
}

?>