<?php

class Tarefa extends Model{

    public function getTarefas(){
        $sql = "SELECT * FROM tarefas";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            return $sql;
        }
    }
}