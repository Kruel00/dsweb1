<?php
include("../controladores/conectDB.php");

$valor = $_GET['editarDivisa'];
    $insertconsult = "select * from divisa where divisaID = $valor";
    $result = sqlsrv_query($con, $insertconsult);
    $registro = sqlsrv_fetch_array($result);

    //actualizar una divisa en la base de datos
    if (isset($_POST['updateDivisa'])) {
        $divisaEdit = $_GET['editarDivisa'];

        $cn = $_POST['txt_divisa'];
        $cv = floatval($_POST['txt_valor']);
        $cd = $_POST['txt_pais'];
        $insertconsult = "update divisa set nombre='$cn' , valor=$cv, pais='$cd' where divisaID=$divisaEdit;";

        $result = sqlsrv_query($con, $insertconsult);

        if ($result) {
           echo "<script>location.href='registro_divisas.php?update=true';</script>";
        } else {
            echo "<script>location.href='registro_divisas.php?update=false';</script>";
        }
    }
?>

<html>
<br>
<hr>
<form action="" method="POST">
    <div class="reg-area">
        <div class="label-area">
            <label for="txt_divisa">Criptomoneda: </label>
            <label for="txt_valor">Valor:</label>
            <label for="txt_pais">Origen</label>
        </div>

        <div class="input-area">
            <input type="text" name="txt_divisa" value='<?php echo $registro[1]; ?>'>
            <input type="text" name="txt_valor" id="txt_valor" value='<?php echo $registro[2]; ?>'>
            <input type="text" name="txt_pais" id="txt_pais" placeholder="Origen" value="<?php echo $registro[3]; ?>">
        </div>
    </div>
    <br>

    <div class="buttons-area">
        <div class="send-area">
            <input type="submit" name="updateDivisa" value="Editar">
        </div>
</form>
<div class="cancel-area">
    <button onclick="window.location='registro_divisas.php'">Cancelar</button>
</div>
</div>

<br>
<div class="bot"></div>
</html>