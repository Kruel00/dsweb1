<!--
    Alumno: Javier Castorena
    Matricula: es172006048
    Materia: Programacion web 1 
-->
<?php include("../controladores/conectDB.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/site.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Financiera Chavez</title>
</head>

<body>
<header>
        <div class="top-banner ">
            <h1>Financiera Chavez</h1>
        </div>
        <div class="top-menu">
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../vistas/transacciones.php">Registro de divisas</a></li>
                    <li><a href="../vistas/registro_usuarios.php">Registro de usuarios</a></li>
                </ul>
            </nav>
        </div>
        <HR>
        </HR>
    </header>

    <div class="top-banner2">
        <h1>Transacciones</h1>
    </div>

    <div class="body-page">
        <div class="transaccion-area">

            <div class="label-area">
                <label for="slct_cripto">Criptomoneda: </label>
                <label for="form-label">
                    <label for="slct_transaccion">Seleccione transaccion: </label>
                    <label for="cantidad">Cantidad: </label>
            </div>

            <div class="form-area">
                <form name="formu" action="transacciones.php" id="formu" method="POST">
                    <div class="form-control">
                        <select name="cripto" id="criptomoneda">
                            <option value="1">BTC</option>
                            <option value="2">ETH</option>
                            <option value="3">XRP</option>
                            <option value="4">DODGE</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <select name="tipoTransaccion" id="tipoTransaccion">
                            <option value="0">Comprar</option>
                            <option value="1">Vender</option>
                        </select>
                    </div>
                    <div class=" form-control">
                        <input type="text" name="Cantidad" id="Cant_divisas" placeholder="Cantidad">
                    </div>
                    <div class="form-control">
                        <input type="submit" name="regTransaccion" id="enviar" value="Realizar tranzaccion">
                    </div>
                </form>
            </div>
        </div>


        <div class="informacion-divizas">
            <TABLE>
                <tr align='center'>
                    <td>Criptomonedas</td>
                    <td>Valor</td>
                </tr>
                <tr align='center'>
                    <td>BTC</td>
                    <td>$59,000.00</td>
                </tr>
                <tr align='center'>
                    <td>ETH</td>
                    <td>$3,923.08</td>
                </tr>
                <tr align='center'>
                    <td>XRP</td>
                    <td>$1.5597</td>
                </tr>
                <tr align='center'>
                    <td>DOGE</td>
                    <td>$0.7021</td>
                </tr>
            </TABLE>
        </div>

    </div>
    <div class="area-registros">
        <?php include("../controladores/transacciones.php"); ?>
    </div>
    <script src="../js/transac.js"></script>
</body>

</html>

<?php

//Si se reciven datos de una nueva transaccion.
if (isset($_POST['regTransaccion'])) {
    $cn = intval($_POST['cripto']);
    $tt = $_POST['tipoTransaccion'];
    $cc = floatval($_POST['Cantidad']);
    $precioDivisa = "select tipoDeCambio from criptomoneda where CriptomonedaId = $cn;";
    $result = sqlsrv_query($con, $precioDivisa);
    $valor = sqlsrv_fetch_array($result);
    $pd = floatval($valor['tipoDeCambio']);
    $st = $pd * $cc;

    if ($st < 1000) {
        $cm = $st * .05;
    } else {
        $cm = $st * .01;
    }

    if ($tt == 0) {
        $ttr = $st + $cm;
    } else {
        $ttr = $st - $cm;
    }
    $consultNewCripto = "insert into transaccion values ($cn,$tt,$cc,$pd,$st,$cm,$ttr);";
    $wrtTrans = sqlsrv_query($con, $consultNewCripto);
    if ($wrtTrans) {
        echo "<script>location.href='transacciones.php?saveTrans=true';</script>";
    } else {
        echo "<script>location.href='transacciones.php?saveTrans=false';</script>";
    }
    echo $tt;
}

//Si se recive instruccion de borrar una transaccion 
if (isset($_GET['borrarTransac'])) {
    $transaccionId = $_GET['borrarTransac'];
    $borrarq = "delete from transaccion where transaccionId = $transaccionId";
    sqlsrv_query($con, $borrarq);
}

//Se ejecuta si se recive la orden de actualizar una transaccion.
if (isset($_POST['updateTransaccion'])) {

    echo "se reciovio orden de editar";
    $cn = intval($_POST['cripto']);
    $tt = $_POST['tipoTransaccion'];
    $cc = floatval($_POST['Cantidad']);
    $precioDivisa = "select tipoDeCambio from criptomoneda where CriptomonedaId = $cn;";
    $result = sqlsrv_query($con, $precioDivisa);
    $valor = sqlsrv_fetch_array($result);
    $pd = floatval($valor['tipoDeCambio']);
    $st = $pd * $cc;

    if ($st < 1000) {
        $cm = $st * .05;
    } else {
        $cm = $st * .01;
    }

    if ($tt == 0) {
        $ttr = $st + $cm;
    } else {
        $ttr = $st - $cm;
    }
    $consultNewCripto = "insert into transaccion values ($cn,$tt,$cc,$pd,$st,$cm,$ttr);";
    $wrtTrans = sqlsrv_query($con, $consultNewCripto);
    if ($wrtTrans) {
        echo "<script>location.href='index.php?saveTrans=true';</script>";
    } else {
        echo "<script>location.href='index.php?saveTrans=false';</script>";
    }
}

?>