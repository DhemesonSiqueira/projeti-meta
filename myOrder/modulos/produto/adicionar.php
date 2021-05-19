<?php
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];

    include('classes/Produto.class.php');
    $produto = new Produto();
    $produto->setNome($nome);
    $produto->setValor($valor);
    $produto->setDescricao($descricao);

    echo "O Nome do Produto digitado: ".$produto->getNome()."<br/>";
    echo "O Valor do Produto digitado: ".$produto->getValor()."<br/>";
    echo "A descricao do Produto digitado: ".$produto->getDescricao()."<br/>";

?>


<form method='post' action=''>
Nome:      <input type="text" name='nome'></br>
Valor:          <input type="text" name='valor'></br>
Descricao:     <input type="text" name='descricao'></br>

<input type='submit' name='salvar' value='Salvar'>

</form>