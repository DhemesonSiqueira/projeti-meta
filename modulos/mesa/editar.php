<?php
include("../../classes/DB.class.php");
include("../../classes/Mesa.class.php");
?>

<?php
if (isset($_POST['botao']) && $_POST['botao'] == "Salvar") {
    $mesa = new Mesa($_POST['id']);
    $mesa->setDescricao($_POST['descricao']);
    $mesa->setNumero($_POST['numero']);
    $mesa->setStatus($_POST['status']);
    $mesa->atualizar();
}
?>

<?php
if (isset($_GET['id']) and is_numeric($_GET['id'])) {
    $mesa = new Mesa($_GET['id']);
?>

    <form method='post' action=''>
        Descrição: <input type="text" name='descricao' value='<?php echo $mesa->getDescricao(); ?>'></br>
        Número: <input type="text" name='numero' value='<?php echo $mesa->getNumero(); ?>'></br>
        Status: <input type="text" name='status' value='<?php echo $mesa->getStatus(); ?>'></br>
        <input type="hidden" name='id' value='<?php echo $mesa->getId(); ?>'></br>

        <input type='submit' name='botao' value='Salvar'>
    </form>

<?php } ?>