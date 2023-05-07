<?php

class Tarefa extends Model{

    public function get($id){
        $array = array();
        $sql = "SELECT * FROM tarefas WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }
    public function getTarefas(){
        $array = array();
        $sql = "SELECT * FROM tarefas ORDER BY data_de_vencimento";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function adicionarTarefa($dados){
        $sql = "INSERT INTO tarefas (titulo, descricao, data_de_vencimento, status) VALUES (:titulo, :descricao, :data_de_vencimento, :status)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':titulo',$dados['titulo']);
        $sql->bindValue(':descricao',$dados['descricao']);
        $sql->bindValue(':data_de_vencimento',$dados['data_de_vencimento']);
        $sql->bindValue(':status', false, PDO::PARAM_BOOL);
        $sql->execute();
    }

    private function verificarExisteTarefa($id){
        $sql = "SELECT * FROM tarefas WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if ($sql->rowCount() > 0){
            return true;
        }
        return false;
    }

    public function editar($dados){
        $sql = "UPDATE tarefas SET titulo = :titulo, descricao = :descricao, data_de_vencimento = :data_de_vencimento WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':titulo',$dados['titulo']);
        $sql->bindValue(':descricao',$dados['descricao']);
        $sql->bindValue(':data_de_vencimento',$dados['data_de_vencimento']);
        $sql->bindValue(':id',$dados['id']);
        $sql->execute();
    }

    public function excluir($id){
        $sql = "DELETE FROM tarefas WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

    }

    public function concluido($id){
        $sql = "UPDATE tarefas SET status = true WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();
    }

    public function naoConcluido($id){
        $sql = "UPDATE tarefas SET status = false WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();
    }
}