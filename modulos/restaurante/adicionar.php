<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];

    include("classes/Restaurante.class.php");
    $restaurante = new Restaurante();
    $restaurante->setNome($nome);
    $restaurante->setEmail($email);
    $restaurante->setEndereco($endereco);

    echo "O nome do Restaurante digitado: ".$restaurante->getNome()."<br/>";
    echo "O Email do Restaurante digitado: ".$restaurante->getEmail()."<br/>";
    echo "O Endereço do Restaurante digitado: ".$restaurante->getEndereco()."<br/>";
    
?>


<form method='post' action=''>
Nome:       <input type="text" name='nome'></br>
Email:      <input type="text" name='email'></br>
Endereço:   <input type="text" name='endereco'></br>

<input type='submit' name='salvar' value='Salvar'>

</form>