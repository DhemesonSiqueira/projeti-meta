<?php
include("../../classes/DB.class.php");
include("../../classes/Restaurante.class.php");
?>


<?php
if(isset($_GET['id']) AND is_numeric($_GET['id'])){
    $restaurante = new Restaurante($_GET['id']);
    $restaurante->excluir();
?>



<?php } ?>