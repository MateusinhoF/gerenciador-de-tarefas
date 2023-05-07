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

        $erros = array();        
        if (empty($_POST['titulo'])){
            array_push($erros,'Insira um título');
        }
        if (empty($_POST['descricao'])){
            array_push($erros,'Insira uma descrição');
        }
        if (empty($_POST['data_de_vencimento'])){
            array_push($erros,'Insira uma data de vencimento');
        }

        $data = ['erros'=>$erros];

        $this->loadTemplate('adicionarTarefa',$data);
    }
    
    public function editar($id){
        $dados = array();
        if(!empty($id)){
            $tarefa = new Tarefa();

            if (!empty($_POST['titulo']) && !empty($_POST['descricao']) && !empty($_POST['data_de_vencimento'])){
                $dados = [
                    'id' => $id,
                    'titulo' => $_POST['titulo'],
                    'descricao' => $_POST['descricao'],
                    'data_de_vencimento' => $_POST['data_de_vencimento']
                ];
                $tarefa->editar($dados);
                header("Location: ".BASE_URL);
            }
            else if(isset($_POST['titulo']) && isset($_POST['descricao']) && isset($_POST['data_de_vencimento'])){
                $erros = array();        
                if (empty($_POST['titulo'])){
                    array_push($erros,'Insira um título');
                }
                if (empty($_POST['descricao'])){
                    array_push($erros,'Insira uma descrição');
                }
                if (empty($_POST['data_de_vencimento'])){
                    array_push($erros,'Insira uma data de vencimento');
                }

                
                $dados['info'] = $tarefa->get($id);
                $data = [
                    'erros'=>$erros,
                    'info'=>$dados['info']
                ];

                $this->loadTemplate('editarTarefa',$data);
            }
            else{

                $dados['info'] = $tarefa->get($id);

                if(isset($dados['info']['id'])){
                    $this->loadTemplate('editarTarefa', $dados);
                    exit;
                }
                header("Location: ".BASE_URL);
                
            }
        }
        
    }

    public function excluir($id){
        if(!empty($id)){
            $tarefa = new Tarefa();
            $tarefa->excluir($id);
        }
        header("Location: ".BASE_URL);
    }

    public function concluido($id){
        $tarefa = new Tarefa();
        $tarefa->concluido($id);
        header("Location: ".BASE_URL);
    }
    public function naoConcluido($id){
        $tarefa = new Tarefa();
        $tarefa->naoConcluido($id);
        header("Location: ".BASE_URL);
    }
}