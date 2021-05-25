<?php
include("../../classes/DB.class.php");
include("../../classes/Pedido.class.php");
?>

<?php
if (isset($_GET['id']) and is_numeric($_GET['id'])) {
    $pedido = new Pedido($_GET['id']);
    $pedido->excluir();
}
?>