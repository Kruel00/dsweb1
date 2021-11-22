<?php
include("../controladores/conectDB.php");

$valor = $_GET['editarCripto'];
    $insertconsult = "select * from criptomoneda where CriptomonedaId = $valor";
    $result = sqlsrv_query($con, $insertconsult);
    $registro = sqlsrv_fetch_array($result);

    //actualizar una divisa en la base de datos
    if (isset($_POST['updateCrip'])) {
        $cripId = $_GET['editarCripto'];

        $cn = $_POST['txt_cripto'];
        $cv = floatval($_POST['txt_valor']);
        $insertconsult = "update criptomoneda set nombre='$cn' , tipoDeCambio=$cv where CriptomonedaId=$cripId;";

        $result = sqlsrv_query($con, $insertconsult);
        echo $cripId;

        if ($result) {
           echo "<script>location.href='registro_criptomoneda.php?update=true';</script>";
        } else {

            echo "<script>location.href='registro_criptomoneda.php?update=false';</script>";
        }
    }
?>

<html>
<br>
<hr>
<form action="" method="POST">
    <div class="reg-area">
        <div class="label-area">
            <label for="txt_cripto">Criptomoneda: </label>
            <label for="txt_valor">Valor:</label>
        </div>

        <div class="input-area">
            <input type="text" name="txt_cripto" value='<?php echo $registro[1]; ?>'>
            <input type="text" name="txt_valor" id="txt_valor" value='<?php echo $registro[2]; ?>'>
        </div>
    </div>
    <br>

    <div class="buttons-area">
        <div class="send-area">
            <input type="submit" name="updateCrip" value="Editar">
        </div>
</form>
<div class="cancel-area">
    <button onclick="window.location='registro_criptomoneda.php'">Cancelar</button>
</div>
</div>

<br>
<div class="bot"></div>

</html>