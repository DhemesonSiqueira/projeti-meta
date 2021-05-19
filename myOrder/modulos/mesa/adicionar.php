<?php
    $numero = $_POST['numero'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    include("classes/Mesa.class.php");
    $mesa = new Mesa();
    $mesa->setNumero($numero);
    $mesa->setDescricao($descricao);
    $mesa->setStatus($status);

    echo "O Numero da mesa digitado: ".$mesa->getNumero()."<br/>";
    echo "O Descrição da mesa digitado: ".$mesa->getDescricao()."<br/>";
    echo "O Status da mesa digitado: ".$mesa->getStatus()."<br/>";
    
?>


<form method='post' action=''>
Numero:       <input type="text" name='numero'></br>
Descricao:      <input type="text" name='descricao'></br>
Status:   <input type="text" name='status'></br>

<input type='submit' name='salvar' value='Salvar'>

</form>