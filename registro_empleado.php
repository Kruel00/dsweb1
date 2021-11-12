<!-- 
    Pagina de bienvenida del sitio financiera Chavez.
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
    <h1>Registro de empleados</h1>
    <hr>
    <div class="form-registro">
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
                <label for="">Direccion</label>
                <input type="text" name="direccion" placeholder="Direccion" required>
            </div>
            <div class="form-item">
                <label for="">Telefono</label>
                <input type="phone" name="telefono" placeholder="Telefono" required>
            </div>
            <div class="form-item">
                <label for="">Puesto</label>
                <select name="asesorTipo">
                    <option value="Cajas" selected>Cajero</option>
                    <option value="Piso" >Atencion a clientes</option>
                    <option value="Limpieza">limpiesa</option>
                </select>
            </div>
            <div class="form-item">
                <input type="submit" name="enviarlo">
            </div>
        </form>
    </div>

</body>

</html>

<!-- codigo php para mostrar la tabla de informacion -->
<?php
if (isset($_POST["enviarlo"])) {
    echo " <br><h3>Datos del registro </h3><hr>
    <table>
        <tr>
            <td>Numero de empleado</td>
            <td>Noombre</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td>Correo electronico</td>
            <td>Puesto</td>
            <td>Direccion</td>
            <td>Telefono</td>
        </tr>";

    echo "<tr>";
    echo "<td>" . rand(time(), 500) . "</td>";
    echo "<td>" . $_POST["nombre"] . "</td>";
    echo "<td>" . $_POST["apePaterno"] . "</td>";
    echo "<td>" . $_POST["apeMaterno"] . "</td>";
    echo "<td>" . $_POST["nombre"].".".$_POST["apePaterno"]."@"."financierachavez.com"."</td>";
    echo "<td>" . $_POST["asesorTipo"] . "</td>";
    echo "<td>" . $_POST["direccion"] . "</td>";
    echo "<td>" . $_POST["telefono"] . "</td>";
    echo "<tr>";
    echo "</table>";
}
?>