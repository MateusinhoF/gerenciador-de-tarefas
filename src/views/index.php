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
            <?php echo date('d/m/Y H:i',strtotime($tarefa['data_de_vencimento']));?>
        </td>
        <td>
            <?php echo $tarefa['status'] == false ? 'Para concluir' : 'Concluído';?>
        </td>
        <td>
            <?php
            if ($tarefa['status'] == false){
                echo "<a href=".BASE_URL."tarefa/concluido/".$tarefa['id'].">Concluir</a>";
            }else{
                echo "<a href=".BASE_URL."tarefa/naoConcluido/".$tarefa['id'].">Não Concluído</a>";
            }
            ?>
            
            <a href="<?php echo BASE_URL; ?>tarefa/editar/<?=$tarefa['id']?>">Editar</a>

            <a href="<?php echo BASE_URL; ?>tarefa/excluir/<?=$tarefa['id']?>">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>