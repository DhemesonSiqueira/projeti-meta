<?php
    include("../../classes/Restaurante.class.php");
    $restaurantes = Restaurante::listar();
?>
<table>
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>ENDEREÇO</th>
</tr>

<?php
if($restaurantes){
    foreach($restaurantes as $restaurante){
?>
    <tr>
        <td><?php echo $restaurante->getId();?></td>
        <td><?php echo $restaurante->getNome();?></td>
        <td><?php echo $restaurante->getEmail();?></td>
        <td><?php echo $restaurante->getEndereco();?></td>
        <td><a href="?modulo=restaurante&acao=editar&id=<?php echo $restaurante->getId();?>">Editar</a></td>
        <td><a href="?modulo=restaurante&acao=ecluir&id=<?php echo $restaurante->getId();?>">Excluir</a></td>
        
    </tr>
<?php
    }
}else{
    echo "<tr><td colspan='4'> Nenhum Registro Encontrado.</td></tr>";
}
?>
</table>