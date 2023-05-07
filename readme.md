# Olá! Aqui estarei escrevendo um pouco sobre o projeto

## Requisitos para rodar o projeto

### Softwares:

- [Docker](https://www.docker.com/).
- [Docker Compose](https://docs.docker.com/compose/).

### Como rodar na minha máquina?

- Clone o projeto `git clone https://github.com/MateusinhoF/gerenciador-de-tarefas`.
- Abra seu terminal na pasta `/config`.
- Execute `docker-compose up -d`.
- Abra seu navegador e acesso seu [localhost](http://localhost).

### Como usar?

- A interface é bem simples. Para adicionar uma tarefa clique em `Adicionar Tarefa` preencha os dados e clique em `Adicionar`, para editá-la clique em `Editar` preencha os dados e clique em `Salvar`, para exclui-la clique em `Excluir`, para marcá-la como concluída clique em `Concluir` e para marcá-la como não concluída clique em `Não Concluído`.

## Padrão de projeto

- Para este projeto foi escolhido o padrão MVC (Model-View-Controller).

## Estrutura de pastas

### Config

- `/config` é a pasta onde estão os arquivos de configurações do docker para que o projeto funcione em um ambiente próprio de desenvolvimento dentro de um container.

### src

- `/src` é a pasta onde estão todos os arquivos do projeto.
- `/src/core` nesta parta estão localizados os principais arquivos necessário para o projeto. Nela estão as classes pai do Controller e do Model e o arquivo Core que é responsavel pelo funcionamento das rotas.

## Funcionamento de algumas partes do código

### Como funciona a parte spl_autoload_register presente no index?

- O spl_autoload_register é uma função do PHP que carrega automaticamente as classes quando solicitadas. Está inserida no index para que possa ser registrada no começo da aplicação para que toda ela possa utilizá-la.

```php
spl_autoload_register(function($class){

    if (file_exists('controllers/'.$class.'.php')){
        require('controllers/'.$class.'.php');
    } 
    else if(file_exists('models/'.$class.'.php')){
        require('models/'.$class.'.php');
    }
    else if(file_exists('core/'.$class.'.php')){
        require('core/'.$class.'.php');
    }
});
```

### Como funciona a classe Core?

- A classe Core pega a URL e a divide em um array para que possa ser separado em classes, métodos e parâmetros. Por exemplo `http://localhost/tarefa/editar/5` será direcionada para a classe `TarefaController` no método `editar` com parâmetro `5`.

```php
class Core{

    public function run(){
        
        $url = '/';

        if (isset($_GET['url'])){
            $url .= $_GET['url'];
        }

        $params = array();

        if (!empty($url) && $url != '/'){
            $url = explode('/', $url);
            array_shift($url);

            $currentController = ucfirst($url[0]).'Controller';
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])){
                $currentAction = $url[0];
                array_shift($url);
            }else{
                $currentAction = 'index';
            }

            if (count($url) > 0){
                $params = $url;
            }

        }else{
            $currentController = 'TarefaController';
            $currentAction = 'index';
        }

        $controller = new $currentController();

        call_user_func_array(array($controller, $currentAction), $params);
        
    }
}
```