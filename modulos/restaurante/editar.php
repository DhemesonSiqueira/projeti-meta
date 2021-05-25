<?php
include("../../classes/DB.class.php");
include("../../classes/Restaurante.class.php");
?>

<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){    
    $restaurante = new Restaurante($_POST['id']);
    $restaurante->setNome($_POST['nome']);
    $restaurante->setEmail($_POST['email']);
    $restaurante->setEndereco($_POST['endereco']);
    $restaurante->atualizar();    
}
?>  



<?php
if(isset($_GET['id']) AND is_numeric($_GET['id'])){
    $restaurante = new Restaurante($_GET['id']);
?>

<form method='post' action=''>
Nome: <input type="text" name='nome' value='<?php echo $restaurante->getNome();?>'></br>
Email: <input type="text" name='email'  value='<?php echo $restaurante->getEmail();?>'></br>
Endereço: <input type="text" name='endereco'  value='<?php echo $restaurante->getEndereco();?>'></br>
<input type="hidden" name='id' value='<?php echo $restaurante->getId(); ?>'></br>

<input type='submit' name='botao' value='Salvar'>
</form>

<?php } ?>