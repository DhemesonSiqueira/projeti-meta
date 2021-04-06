<?php
    $produtos = array();
    $produtos[] = array("id" => 1, "nome" => "Coca", "valor" => "10.00", "descricao" => "2");   
    $produtos[] = array("id" => 2, "nome" => "Fanta", "valor" => "12.00", "descricao" => "1");   
    $produtos[] = array("id" => 3, "nome" => "Guarana", "valor" => "13.00", "descricao" => "4");   
    $produtos[] = array("id" => 4, "nome" => "Pepsi", "valor" => "14.00", "descricao" => "5");          
?>
<table>

<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>VALOR</th>
    <th>DESCRIÇÃO</th>
</tr>

<?php
    foreach($produtos as $produto){
?>
    <tr>
        <td><?php echo $produto['id'];?></td>
        <td><?php echo $produto['nome'];?></td>
        <td><?php echo $produto['valor'];?></td>
        <td><?php echo $produto['descricao'];?></td>
    </tr>
<?php
    }
?>
</table>