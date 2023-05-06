<a href="<?php BASE_URL;?>tarefa/adicionar">Adicionar Tarefa</a>
<table border="1" width="100%">
    <tr>
        <th>
            Título
        </th>
        <th>
            Descrição
        </th>
        <th>
            Data
        </th>
        <th>
            Status
        </th>
        <th>
            Opções
        </th>
    </tr>
    <?php foreach($lista as $tarefa): ?>
    <tr>
        <td>
            <?=$tarefa['titulo'];?>
        </td>
        <td>
            <?=$tarefa['descricao'];?>
        </td>
        <td>
            <?=$tarefa['data_de_vencimento'];?>
        </td>
        <td>
            <?=$tarefa['status'];?>
        </td>
        <td>
            <a href="<?php echo BASE_URL; ?>tarefa/realizar/<?=$tarefa['id']?>">Marcar Como Realizada</a>

            <a href="<?php echo BASE_URL; ?>tarefa/editar/<?=$tarefa['id']?>">Editar</a>

            <a href="<?php echo BASE_URL; ?>tarefa/excluir/<?=$tarefa['id']?>">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>