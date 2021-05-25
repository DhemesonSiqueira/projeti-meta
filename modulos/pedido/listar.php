<?php
    include("../../classes/DB.class.php");
    include("../../classes/Pedido.class.php");
    $pedidos = Pedido::listar();
?>

<table>
<tr>
    <th>ID</th>
    <th>NÚMERO</th>
    <th>DESCRICAO</th>
    <th>VALOR</th>
    <th>ITENS</th>
    <th>Operação</th>
</tr>

<?php
if($pedidos){
    foreach($pedidos as $pedido){
?>
    <tr>
        <td><?php echo $pedido->getId();?></td>
        <td><?php echo $pedido->getPrecoNumero();?></td>
        <td><?php echo $pedido->getDescricao();?></td>
        <td><?php echo $pedido->getValor();?></td>
        <td><?php echo $pedido->getItens();?></td>
        <td><a href="?modulo=pedido&acao=editar&id=<?php echo $pedido->getId();?>">Editar</a></td>
        <td><a href="?modulo=pedido&acao=excluir&id=<?php echo $pedido->getId();?>">Excluir</a></td>
        
    </tr>
<?php
    }
}else{
    echo "<tr><td colspan='4'> Nenhum Registro Encontrado.</td></tr>";
}
?>
</table>