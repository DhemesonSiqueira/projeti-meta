<?php
    $mesas = array();
    $mesas[] = array("id" => 1, "nome" => "Joao", "descricao" => "joao@gmail.com", "status" => "Livre");
    $mesas[] = array("id" => 2, "nome" => "Maria", "descricao" => "maria@gmail.com", "status" => "Livre");
    $mesas[] = array("id" => 3, "nome" => "Pedro", "descricao" => "pedro@gmail.com", "status" => "Livre");   
    $mesas[] = array("id" => 4, "nome" => "José", "descricao" => "jose@gmail.com", "status" => "Livre");   
    $mesas[] = array("id" => 5, "nome" => "Benedito", "descricao" => "bene@gmail.com", "status" => "Livre");           
?>
<table>

<tr>
    <th>ID</th>
    <th>NUMERO</th>
    <th>DESCRIÇÃO</th>
    <th>STATUS</th>
</tr>

<?php
    foreach($mesas as $mesa){
?>
    <tr>
        <td><?php echo $mesa['id'];?></td>
        <td><?php echo $mesa['nome'];?></td>
        <td><?php echo $mesa['descricao'];?></td>
        <td><?php echo $mesa['status'];?></td>
    </tr>
<?php
    }
?>
</table>