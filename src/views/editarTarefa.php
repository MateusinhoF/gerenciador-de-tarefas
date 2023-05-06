<form method="post">
    <p>Editar Tarefa</p>
    <div>
        Título <input type="text" name="titulo" id="titulo" value="<?=$info['titulo']?>">
        Descrição <input type="text" name="descricao" id="descricao" value="<?=$info['descricao']?>">
        Data e Hora <input type="datetime-local" name="data_de_vencimento" id="data_de_vencimento" value="<?=$info['data_de_vencimento']?>">
        <input type="submit" name="salvar" value="Salvar">
    </div>
</form>