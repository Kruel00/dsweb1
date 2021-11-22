<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/site.css">

    <title>Financiera Chavez - Divisas</title>
</head>

<body>
    <header>
        <div class="top-banner">
            <img src="../img/logo.png" alt="">
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
        <h2>Registrar divisas</h2>
    </header>
    <form action="" method="POST">
        <div class="reg-area">
            <div class="label-area">
                <label for="txt_divisa">Divisa: </label>
                <label for="txt_valor">Valor:</label>
                <label for="txt_pais">Pais:</label>
            </div>

            <div class="input-area">
                <input type="text" name="txt_divisa" id="txt_divisa" placeholder="Divisa">
                <input type="text" name="txt_valor" id="txt_valor" placeholder="Valor en dolares">
                <input type="text" name="txt_pais" id="txt_pais" placeholder="Pais">
            </div>
        </div>
        <div class="send-area">
            <input type="submit" name="saveDivisa" value="Guardar">
        </div>
    </form>
    <br>
    <hr>
    <div class="tabla-registros">
        <?php
        include("../controladores/conectDB.php");
        $insertconsult = "select * from divisa";
        $result = sqlsrv_query($con, $insertconsult);
        echo
        "<table id='transac'>
        <tr>
            <td align='center'>ID de divisa</td>
            <td align='center'>Nombre</td>
            <td align='center'>Tipo de cambio</td>
            <td align='center'>Origen</td>
            <td align='center'>Editar</td>
            <td align='center'>Borrar</td>
        </tr>
    ";

        while ($row = sqlsrv_fetch_array($result)) {
            echo
            "<tr>
            <td align='center'>$row[0]</td>
            <td align='center'>$row[1]</td>
            <td align='center'>$row[2]</td>
            <td align='center'>$row[3]</td>
            <td align='center'><a href='registro_divisas.php?editarDivisa=$row[0]'>Editar</a></td>
            <td align='center'><a href='registro_divisas.php?borrarDivisa=$row[0]'>Borrar</a></td>
            ";
        }
        echo "
        </tr>
    </table>";

        if (isset($_POST['saveDivisa'])) {
            $cn = $_POST['txt_divisa'];
            $cv = $_POST['txt_valor'];
            $cd = $_POST['txt_pais'];
            $insertconsult = "insert into divisa values ('$cn',$cv,'$cd');";
            $result = sqlsrv_query($con, $insertconsult);
            if ($result) {
                echo "<script>location.href='registro_divisas.php?divsaved=true';</script>";
            } else {
                echo "<script> alert('los datos introducidos son incorrectos') </script>";
                echo "<script>location.href='registro_divisas.php?divsaved=false';</script>";
            }
        }

        if (isset($_GET['borrarDivisa'])) {
            $DivisaId = $_GET['borrarDivisa'];
            $borrarq = "delete from divisa where divisaID = $DivisaId";
            sqlsrv_query($con, $borrarq);
            echo "<script>location.href='registro_divisas.php';</script>";
        }

        if(isset($_GET['editarDivisa'])){
            
            include("edit_divisa.php");
        }
        ?>
    </div>
    <script src="../js/transac.js"></script>
</body>

</html>