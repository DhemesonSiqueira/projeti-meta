<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){    
    include('../../classes/Pedido.class.php');
    $pedido = new Pedido();
    $pedido->setNumero($_POST['numero']);
    $pedido->setDescricao($_POST['descricao']);
    $pedido->setValor($_POST['valor']);
    $pedido->setItens($_POST['itens']);
    $pedido->adicionar();    
}
   
?>


<form method='post' action=''>
Preço: <input type="text" name='numero'></br>
Descrição: <input type="text" name='descricao'></br>
Itens: <input type="text" name='itens'></br>

<input type='submit' name='botao' value='Salvar'>

</form>