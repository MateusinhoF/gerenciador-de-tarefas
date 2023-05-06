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
            <?=$tarefa['data'];?>
        </td>
        <td>
            <?=$tarefa['status'];?>
        </td>
        <td>
            Editar

            Excluir
        </td>
    </tr>
    <?php endforeach; ?>
</table>