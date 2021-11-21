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
            <img src="img/logo.png" alt="">
            <h1>Financiera Chavez</h1>
        </div>
        <div class="top-menu">
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../vistas/transacciones.php">Transacciones</a></li>
                </ul>
            </nav>
        </div>
        <HR> 
            <h2>Registrar divisa</h2>
    </header>
    <form action="">
        <div class="reg-area">
            <div class="label-area">
                <label for="txt_nombre_divisa">Nombre de la divisa: </label>
                <label for="txt_valor">Valor:</label>
                <label for="txt_pais">Pais:</label>
            </div>
            <div class="input-area">
                <input type="text" name="txt_divisa" placeholder="Nombre">
                <input type="text" name="txt_valor" id="txt_apellido" placeholder="Valor">
                <input type="text" name="txt_pais" id="txt_email" placeholder="Pais">
            </div>

        </div>
        <div class="send-area">
                <input type="submit">
            </div>
    </form>
</body>

</html>