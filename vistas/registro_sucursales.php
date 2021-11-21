<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">

    <title>Document</title>
</head>

<body>
    <header>
        <div class="top-banner">
            <h1>Financiera Chavez</h1>
        </div>
        <div class="top-menu">
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../vistas/registro_empleado.php">Registro de divisas</a></li>
                    <li><a href="../vistas/transacciones.php">Transacciones</a></li>
                    
                </ul>
            </nav>
        </div>
        <HR>
        </HR>
    </header>
    <form action="">
        <div class="reg-area">
            <div class="label-area">
                <label for="slct_tipo_usuario">Tipo de usuario: </label>
                <label for="txt_usuario">Nombre: </label>
                <label for="txt_apellido">Apellido:</label>
                <label for="txt_email">Correo electronico:</label>
                <label for="txt_direccion">Direccion:</label>
                <label for="txt_telefono">Telefono</label>
            </div>
            <div class="input-area">
                <select name="tipo_usuario" id="tipo_usuario">
                    <option value="1">Empleado</option>
                    <option value="2">Cliente</option>
                    <option value="3">Asesor de cuentas</option>
                    <option value="4">Asesor de seguros</option>
                    <option value="5">Asesor de ahorros</option>
                </select>
                <input type="text" name="txt_usuario" placeholder="Nombre">
                <input type="text" name="txt_apellido" id="txt_apellido" placeholder="Apellido">
                <input type="text" name="txt_email" id="txt_email" placeholder="email">
                <input type="text" name="txt_direccion" id="txt_direccion" placeholder="Direccion">
                <input type="text" name="txt_telefono" id="txt_telefono" placeholder="Telefono">
            </div>

        </div>
        <div class="send-area">
                <input type="submit">
            </div>
    </form>
</body>

</html>