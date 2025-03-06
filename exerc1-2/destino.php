<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = $_POST;
} else {
    $dados = $_GET;
}

$headers = apache_request_headers();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <style>
        body { font-family: Arial, sans-serif; }
    </style>
</head>
<body>
    <h1>Dados Recebidos</h1>
    <h2>Informações do Formulário</h2>
    <ul>
        <?php foreach ($dados as $chave => $valor): ?>
            <li><strong><?php echo ($chave); ?>:</strong> <?php echo ($valor); ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>Cabeçalhos da Requisição</h2>
    <ul>
        <?php foreach ($headers as $chave => $valor): ?>
            <li><strong><?php echo ($chave); ?>:</strong> <?php echo ($valor); ?></li>
        <?php endforeach; ?>
    </ul>
    <p><strong>Método utilizado:</strong> <?php echo $_SERVER['REQUEST_METHOD']; ?></p>
</body>
</html>
