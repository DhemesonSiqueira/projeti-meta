<?php
    $restaurantes = array();
    $restaurantes[] = array("id" => 1, "nome" => "Joao", "email" => "joao@gmail.com", "endereco" => "Rua Tiradentes, 1234, Bairro Centro");
    $restaurantes[] = array("id" => 2, "nome" => "Maria", "email" => "maria@gmail.com", "endereco" => "Rua Tiradentes, 1234, Bairro Centro");
    $restaurantes[] = array("id" => 3, "nome" => "Pedro", "email" => "pedro@gmail.com", "endereco" => "Rua Tiradentes, 1234, Bairro Centro");   
    $restaurantes[] = array("id" => 4, "nome" => "José", "email" => "jose@gmail.com", "endereco" => "Rua Tiradentes, 1234, Bairro Centro");   
    $restaurantes[] = array("id" => 5, "nome" => "Benedito", "email" => "bene@gmail.com", "endereco" => "Rua Tiradentes, 1234, Bairro Centro");           
?>
<table>

<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>ENDEREÇO</th>
</tr>

<?php
    foreach($restaurantes as $restaurante){
?>
    <tr>
        <td><?php echo $restaurante['id'];?></td>
        <td><?php echo $restaurante['nome'];?></td>
        <td><?php echo $restaurante['email'];?></td>
        <td><?php echo $restaurante['endereco'];?></td>
    </tr>
<?php
    }
?>
</table>