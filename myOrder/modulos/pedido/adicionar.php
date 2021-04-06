<?php
    $numero = $_POST['numero'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $itens = $_POST['itens'];

    include("classes/Pedido.class.php");
    $pedido = new Pedido();
    $pedido->setNumero($numero);
    $pedido->setDescricao($descricao);
    $pedido->setValor($valor);
    $pedido->setItens($itens);

    echo "O Numero do pedido digitado: ".$pedido->getNumero()."<br/>";
    echo "O descricao do pedido digitado: ".$pedido->getDescricao()."<br/>";
    echo "O valor do pedido digitado: ".$pedido->getValor()."<br/>";
    echo "Os Itens do pedido selecionados: ".$pedido->getItens()."<br/>";
    
?>


<form method='post' action=''>
Numero:         <input type="text" name='numero'></br>
Descricao:      <input type="text" name='descricao'></br>
Valor:          <input type="text" name='valor'></br>
Itens:          <input type="text" name='itens'></br>

<input type='submit' name='salvar' value='Salvar'>

</form>