<!-- 
 
    Alumno: Javier Castorena Carvajal.
    Matricula: ES172006048
    Grupo: DS-DPW1-2102-B2-001
-->

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
    <h1>Registro de asesores</h1>
    <hr>

<!-- Formulario de registro de asesores-->
    <div class="form-registro-clientes">
        <!-- se realiza el envio de la informacion a la misma pagina de registro -->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-item">
                <label for="">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-item">
                <label for="">Apellido paterno</label>
                <input type="text" name="apePaterno" placeholder="Apellido paterno" required>
            </div>
            <div class="form-item">
                <label for="">Apellido materno</label>
                <input type="text" name="apeMaterno" placeholder="Apellido materno" required>
            </div>
            <div class="form-item">
                <label for="">Correo electronico</label>
                <input type="text" name="email" placeholder="Email" required>
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
                <label for="">Tipo de asesor</label>
                <select name="asesorTipo">
                    <option value="cuentas" selected>Asesor de cuentas</option>
                    <option value="seguros" >Asesor de seguros</option>
                    <option value="ahorros">Asesor de ahorros</option>
                </select>
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
            <td>Noombre</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td>Correo electronico</td>
            <td>Rol del asesor</td>
            <td>Direccion</td>
            <td>Telefono</td>
        </tr>";

    echo "<tr>";
    echo "<td>" . $_POST["nombre"] . "</td>";
    echo "<td>" . $_POST["apePaterno"] . "</td>";
    echo "<td>" . $_POST["apeMaterno"] . "</td>";
    echo "<td>" . $_POST["email"] . "</td>";
    echo "<td>" . $_POST["asesorTipo"] . "</td>";
    echo "<td>" . $_POST["direccion"] . "</td>";
    echo "<td>" . $_POST["telefono"] . "</td>";
    echo "<tr>";
    echo "</table>";
}
?>