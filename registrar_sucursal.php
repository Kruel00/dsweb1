<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>
    <h1>Registro de sucursal</h1>
    <hr>

    <div class="form-registro-clientes">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-item">
                <label for="">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-item">
                <label for="">Direccion</label>
                <input type="text" name="direccion" placeholder="Direccion" required>
            </div>
            <div class="form-item">
                <label for="">Telefono</label>
                <input type="phone" name="telefono" placeholder="Telefono" required>
            </div>
            <div class="form-item">
                <label for="">Nombre del responsable</label>
                <input type="text" name="responsable" placeholder="Responsable de sucursal" required>
            </div>
            </div>
            <div class="form-item">
                <input type="submit" name="enviarlo">
            </div>
        </form>
    </div>

</body>

</html>
<?php
if (isset($_POST["enviarlo"])) {
    echo " <br><h3>Datos del registro </h3><hr>
    <table>
        <tr>
            <td>Numero de sucursal</td>
            <td>Nombre</td>
            <td>Direccion</td>
            <td>Correo electronico</td>
            <td>Telefono</td>
            <td>Responsable</td>
        </tr>";

    $nombreSuc =  trim($_POST["nombre"]);
    echo "<tr>"; 
    echo "<td>" . rand(1,100). "</td>";
    echo "<td>" . $_POST["nombre"] . "</td>";
    echo "<td>" . $_POST["direccion"] . "</td>";
    echo "<td>" . "sucursal" . "." . $nombreSuc."@"."financierachavez.com". "</td>";
    echo "<td>" . $_POST["telefono"] . "</td>";
    echo "<td>" . $_POST["responsable"] . "</td>";
    echo "<tr>";
    echo "</table>";
}
?>