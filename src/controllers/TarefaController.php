<?php

class TarefaController extends Controller{

    public function index(){
        $tarefa = new Tarefa();
        $dados['lista'] = $tarefa->getTarefas();
        $this->loadTemplate('index',$dados);
    }

    public function adicionar(){
        $dados = array();
        $this->loadTemplate('adicionarTarefa', $dados);
    }

    public function salvarNovaTarefa(){
        if(!empty($_POST['titulo']) && !empty($_POST['descricao']) && !empty($_POST['data_de_vencimento'])){
            $tarefa = new Tarefa();
            $dados = [
                'titulo' => $_POST['titulo'],
                'descricao' => $_POST['descricao'],
                'data_de_vencimento' => $_POST['data_de_vencimento']
            ];
            //add try catch?
            $tarefa->adicionarTarefa($dados);
            
            header("Location: ".BASE_URL);
        }
    }
    
    public function editar($id){
        $dados = array();
        if(!empty($id)){
            $tarefa = new Tarefa();

            if (!empty($_POST['id'])){
                $dados = [
                    'id' => $_POST['id'],
                    'titulo' => $_POST['titulo'],
                    'descricao' => $_POST['descricao'],
                    'data_de_vencimento' => $_POST['data_de_vencimento']
                ];

                $tarefa->editar($dados);
            }else{

                $dados['info'] = $tarefa->get($id);

                if(isset($dados['info']['id'])){
                    $this->loadTemplate('editarTarefa', $dados);
                }
            }
        }
        header("Location: ".BASE_URL);
    }

    public function excluir($id){
        if(!empty($id)){
            $tarefa = new Tarefa();
            $tarefa->excluir($id);
        }
        header("Location".BASE_URL);
    }

    public function realizar($id){
        
    }
    public function naoRealizado($id){
        
    }
}