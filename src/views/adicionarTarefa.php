<form method="post" action="<?php echo BASE_URL;?>tarefa/salvarNovaTarefa">
    <p>Adicionar Tarefa</p>
    <div>
        Título <input type="text" name="titulo" id="titulo">
        Descrição <input type="text" name="descricao" id="descricao">
        Data <input type="datetime-local" name="data_de_vencimento" id="data_de_vencimento">
        <input type="submit" name="adicionar" value="Adicionar">
    </div>
</form>
<a href="<?=BASE_URL?>">Voltar ao início</a>