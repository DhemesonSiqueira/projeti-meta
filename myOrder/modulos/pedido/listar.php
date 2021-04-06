<?php
    $pedidos = array();
    $pedidos[] = array("id" => 1, "numero" => "Joao", "descricao" => "joao@gmail.com", "valor" => "123456", "itens" => "Pizza, Refrigerante e Pudim");
    $pedidos[] = array("id" => 2, "numero" => "Maria", "descricao" => "maria@gmail.com", "valor" => "654321", "itens" => "Pizza, Refrigerante e Pudim");
    $pedidos[] = array("id" => 3, "numero" => "Pedro", "descricao" => "pedro@gmail.com", "valor" => "123123", "itens" => "Pizza, Refrigerante e Pudim");   
    $pedidos[] = array("id" => 4, "numero" => "José", "descricao" => "jose@gmail.com", "valor" => "456456", "itens" => "Pizza, Refrigerante e Pudim");  
    $pedidos[] = array("id" => 5, "numero" => "Benedito", "descricao" => "bene@gmail.com", "valor" => "456456", "itens" => "Pizza, Refrigerante e Pudim");         
?>
<table>

<tr>
    <th>ID</th>
    <th>NUMERO</th>
    <th>DESCRIÇÃO</th>
    <th>VALOR</th>
    <th>ITENS</th>
</tr>

<?php
    foreach($pedidos as $pedido){
?>
    <tr>
        <td><?php echo $pedido['id'];?></td>
        <td><?php echo $pedido['numero'];?></td>
        <td><?php echo $pedido['descricao'];?></td>
        <td><?php echo $pedido['valor'];?></td>
        <td><?php echo $pedido['itens'];?></td>
    </tr>
<?php
    }
?>
</table>