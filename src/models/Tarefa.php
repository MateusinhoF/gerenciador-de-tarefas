<?php

class Tarefa extends Model{

    public function getTarefas(){
        $array = array();
        $sql = "SELECT * FROM tarefas";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }
}