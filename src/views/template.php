<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciador de Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>Gerenciador</h1>
    </header>

    <section id="crud">
        <?php $this->loadViewInTemplate($viewName, $viewData);?>
    </section>
    
    <section id="erros">
        <?php if (!empty($viewData['erros'])): ?>
        <div id="erros">
            <?php foreach ($viewData['erros'] as $erro): ?>
                <p><?php echo $erro; ?></p>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </section>

    <footer>
        Feito por: Mateus Fernando
        <a href="https://github.com/MateusinhoF">GitHub</a> 
    </footer>
</body>
</html>
