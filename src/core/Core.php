<?php

class Core{

    public function run(){
        
        $url = '/';
        if (isset($_GET['url'])){
            $url .= $_GET['url'];
        }

        if (!empty($url) && $url != '/'){
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])){
                $currentAction = $url[0];
            }else{
                $currentAction = 'index';
            }
        }else{
            $currentController = 'TarefaController';
            $currentAction = 'index';
        }
    }
}