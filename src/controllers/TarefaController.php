<?php

class TarefaController extends Controller{

    public function index(){
        $tarefa = new Tarefa();
        $dados['lista'] = $tarefa->getTarefas();
        $this->loadTemplate('index',$dados);
    }

    public function adicionar(){
        $this->loadTemplate('adicionarTarefa');
    }

    public function editar(){
        $this->loadTemplate('editarTarefa');
    }

    public function excluir(){
        
    }
}