<?php
include("../../classes/DB.class.php");
include("../../classes/Cliente.class.php");
?>

<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){    
    $cliente = new Cliente($_POST['id']);
    $cliente->setNome($_POST['nome']);
    $cliente->setEmail($_POST['email']);
    $cliente->setTelefone($_POST['telefone']);
    $cliente->atualizar();    
}
?>  



<?php
if(isset($_GET['id']) AND is_numeric($_GET['id'])){
    $cliente = new Cliente($_GET['id']);
?>

<form method='post' action=''>
Nome: <input type="text" name='nome' value='<?php echo $cliente->getNome();?>'></br>
Email: <input type="text" name='email'  value='<?php echo $cliente->getEmail();?>'></br>
Telefone: <input type="text" name='telefone'  value='<?php echo $cliente->getTelefone();?>'></br>
<input type="hidden" name='id' value='<?php echo $cliente->getId(); ?>'></br>

<input type='submit' name='botao' value='Salvar'>
</form>

<?php } ?>