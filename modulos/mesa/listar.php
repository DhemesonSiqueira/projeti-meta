<?php
include("../../classes/DB.class.php");
include("../../classes/Mesa.class.php");
$mesas = Mesa::listar();
?>

<table>
    <tr>
        <th>ID</th>
        <th>DESCRICAO</th>
        <th>NÚMERO</th>
        <th>STATUS</th>
        <th>Operação</th>
    </tr>

    <?php
    if ($mesas) {
        foreach ($mesas as $mesa) {
    ?>
            <tr>
                <td><?php echo $mesa->getId(); ?></td>
                <td><?php echo $mesa->getDescricao(); ?></td>
                <td><?php echo $mesa->getNumero(); ?></td>
                <td><?php echo $mesa->getStatus(); ?></td>
                <td><a href="?modulo=mesa&acao=editar&id=<?php echo $mesa->getId(); ?>">Editar</a></td>
                <td><a href="?modulo=mesa&acao=excluir&id=<?php echo $mesa->getId(); ?>">Excluir</a></td>

            </tr>
    <?php
        }
    } else {
        echo "<tr><td colspan='4'> Nenhum Registro Encontrado.</td></tr>";
    }
    ?>
</table>