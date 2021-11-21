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
                    <li><a href="../vistas/transacciones.php">Transacciones</a></li>
                </ul>
            </nav>
        </div>
        <HR>
        <h2>Registrar criptomoneda</h2>
    </header>
    <form action="">
        <div class="reg-area">

            <div class="label-area">
                <label for="txt_nombre_cripto">Criptomoneda: </label>
                <label for="txt_valor">Valor:</label>
            </div>

            <div class="input-area">
                <input type="text" name="txt_cripto" placeholder="iniciales">
                <input type="text" name="txt_cripto" id="txt_cripto" placeholder="Valor en dolares">
            </div>

        </div>
        <div class="send-area">
            <input type="submit">
        </div>
    </form>
</body>

</html>