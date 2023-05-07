<div class="text-end">
    <a class="btn btn-primary rounded-pill px-3" href="<?php BASE_URL;?>tarefa/adicionar">Adicionar Tarefa</a>
</div>
<div class="container-fluid flex border border-dark p-3 my-3">
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th class="">
            Título
        </th class="">
        <th class="">
            Descrição
        </th>
        <th class="">
            Data
        </th>
        <th class="">
            Status
        </th>
        <th class="">
            Opções
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($lista as $tarefa): ?>
    <tr>
        <td class="">
            <?=$tarefa['titulo'];?>
        </td>
        <td class="">
            <?=$tarefa['descricao'];?>
        </td>
        <td class="">
            <?php echo date('d/m/Y H:i',strtotime($tarefa['data_de_vencimento']));?>
        </td>
        <td class="">
            <?php echo $tarefa['status'] == false ? 'Para concluir' : 'Concluído';?>
        </td>
        <td class="">
            <?php if ($tarefa['status'] == false): ?>
                <a 
                    class="btn btn-success rounded-pill px-3"
                    href="<?php echo BASE_URL."tarefa/concluido/".$tarefa['id']?>"
                >Concluir</a>
            <?php else: ?>
                <a 
                    class="btn btn-secondary rounded-pill px-3"
                    href="<?php echo BASE_URL."tarefa/naoConcluido/".$tarefa['id']?>"
                >Não Concluído</a>
            <?php endif; ?>
            
            <a 
                class="btn btn-info rounded-pill px-3"
                href="<?php echo BASE_URL; ?>tarefa/editar/<?=$tarefa['id']?>"
            >Editar</a>

            <a 
                class="btn btn-danger rounded-pill px-3"
                href="<?php echo BASE_URL; ?>tarefa/excluir/<?=$tarefa['id']?>"
            >Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>