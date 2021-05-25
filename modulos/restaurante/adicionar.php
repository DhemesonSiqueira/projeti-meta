<?php
    if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){    
        include("../../classes/Restaurante.class.php");
        $restaurante = new Restaurante();
        $restaurante->setNome($_POST['nome']);
        $restaurante->setEmail($_POST['email']);
        $restaurante->setEndereco($_POST['endereco']);
        $restaurante->adicionar();    
    }
?>

<form method='post' action=''>
Nome:       <input type="text" name='nome'></br>
Email:      <input type="text" name='email'></br>
Endereço:   <input type="text" name='endereco'></br>

<input type='submit' name='botao' value='Salvar'>

</form>