<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/site.css">

    <title>Document</title>
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
        <h2>Registrar criptomoneda</h2>
    </header>
    <form action="" method="POST">
        <div class="reg-area">
            <div class="label-area">
                <label for="txt_cripto">Criptomoneda: </label>
                <label for="txt_valor">Valor:</label>
            </div>

            <div class="input-area">
                <input type="text" name="txt_cripto" placeholder="iniciales">
                <input type="text" name="txt_valor" id="txt_valor" placeholder="Valor en dolares">
            </div>
        </div>
        <div class="send-area">
            <input type="submit" name="saveCrip" value="Guardar">
        </div>
    </form>
    <br>
    <hr>
    <div class="tabla-registros">
        <?php
        include("../controladores/conectDB.php");
        $insertconsult = "select * from criptomoneda";
        $result = sqlsrv_query($con, $insertconsult);
        echo
        "<table id='transac'>
        <tr>
            <td align='center'>ID de criptomoneda</td>
            <td align='center'>Criptomoneda</td>
            <td align='center'>Tipo de cambio</td>
            <td align='center'>Editar</td>
            <td align='center'>Borrar</td>
        </tr>
    ";

        while ($row = sqlsrv_fetch_array($result)) {
            echo
            "<tr>
            <td align='center'>$row[0]</td>
            <td align='center'>$row[1]</td>
            <td align='center'>$$row[2]</td>
            <td align='center'><a href='registro_criptomoneda.php?editarCripto=$row[0]'>Editar</a></td>
            <td align='center'><a href='registro_criptomoneda.php?borrarCripto=$row[0]'>Borrar</a></td>
            ";
        }
        echo "
        </tr>
    </table>";
        //se recive la informacion de la criptomoneda que se registrara y se procede a guardarla en la base de datos
        if (isset($_POST['saveCrip'])) {
            $cn = $_POST['txt_cripto'];
            $cv = $_POST['txt_valor'];
            $insertconsult = "insert into criptomoneda values ('$cn',$cv);";
            $result = sqlsrv_query($con, $insertconsult);
            if ($result) {
                echo "<script>location.href='registro_criptomoneda.php?mostrarCriptomonedas=1';</script>";
            } else {
                echo "<script> alert('los datos introducidos son incorrectos') </script>";
                echo "<script>location.href='registro_criptomoneda.php?criptoSaved=false';</script>";
            }
        }

        //borra el registro de la base de datos que se recive por el metodo $_GET
        if (isset($_GET['borrarCripto'])) {
            $CriptomonedaId = $_GET['borrarCripto'];
            $borrarq = "delete from criptomoneda where CriptomonedaId = $CriptomonedaId";
            sqlsrv_query($con, $borrarq);
            echo "<script>location.href='registro_criptomoneda.php?mostrarCriptomonedas=1';</script>";
        }

        if(isset($_GET['editarCripto'])){
            
            include("edit_cripto.php");
        }

        ?>
    </div>

</body>

</html>