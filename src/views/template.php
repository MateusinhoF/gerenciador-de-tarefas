<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css"/>
    <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/script.js"></script>
</head>
<body>
    <header>
        <h1>Gerenciador</h1>
    </header>

    <section>
        <?php $this->loadViewInTemplate($viewName, $viewData);?>
    </section>
    
    <footer>
        Feito por: Mateus Fernando
        <a href="https://github.com/MateusinhoF">GitHub</a> 
    </footer>
</body>
</html>
