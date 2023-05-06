<?php

class TarefaController extends Controller{

    public function index(){
        $this->loadTemplate('index');
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