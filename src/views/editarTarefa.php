<div class="text-center">
    <p class="fs-4">Editar Tarefa</p>
</div>

<form method="post">
    <div>
        <div class="my-2">
            <label class="form-label" for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="<?=$info['titulo']?>">
        </div>
        <div class="my-2">
            <label class="form-label" for="descricao">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" value="<?=$info['descricao']?>">
        </div>
        <div class="my-2">
            <label class="form-label" for="data_de_vencimento">Data</label>
            <input type="datetime-local" class="form-control" name="data_de_vencimento" id="data_de_vencimento" value="<?=$info['data_de_vencimento']?>">
        </div>
        <div class="my-3 text-center">
            <input class="btn btn-primary rounded-pill px-3" type="submit" name="salvar" value="Salvar">
        </div>
    </div>
</form>
<div class="text-end">
    <a class="btn btn-info rounded-pill px-3" href="<?=BASE_URL?>">Voltar ao início</a>
</div>

