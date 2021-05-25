<?php
if (isset($_POST['botao']) && $_POST['botao'] == "Salvar") {
    include('../../classes/Mesa.class.php');
    $mesa = new Mesa();
    $mesa->setDescricao($_POST['descricao']);
    $mesa->setNumero($_POST['numero']);
    $mesa->setStatus($_POST['status']);
    $mesa->adicionar();
}

?>


<form method='post' action=''>
    Descrição: <input type="text" name='descricao'></br>
    Número: <input type="text" name='numero'></br>
    Status: <input type="text" name='status'></br>

    <input type='submit' name='botao' value='Salvar'>

</form>