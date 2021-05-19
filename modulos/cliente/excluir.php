<?php
include("../../classes/DB.class.php");
include("../../classes/Cliente.class.php");
?>


<?php
if(isset($_GET['id']) AND is_numeric($_GET['id'])){
    $cliente = new Cliente($_GET['id']);
    $cliente->excluir();
?>



<?php } ?>