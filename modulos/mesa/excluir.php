<?php
include("../../classes/DB.class.php");
include("../../classes/Mesa.class.php");
?>

<?php
if (isset($_GET['id']) and is_numeric($_GET['id'])) {
    $mesa = new Mesa($_GET['id']);
    $mesa->excluir();
}
?>