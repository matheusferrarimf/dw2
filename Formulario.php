<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
    header('Location: destino.php?' . http_build_query($_GET));
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
    <style>
        body { font-family: Arial, sans-serif; }
        form { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>PW2 - Exemplo requisições HTTP + PHP - Request</h1>
    <form action="destino.php" method="post">
        Nome: <input type="text" name="nome" required><br>
        Fone: <input type="text" name="fone" required><br>
        E-mail: <input type="email" name="email" required><br>
        Mensagem:<br> <textarea name="mensagem" rows="4" required></textarea><br>
        <button type="submit">Enviar</button>
    </form>
    <p>Você também pode fazer REQUEST na URL:</p>
    <a href="destino.php?nome=Joao&fone=123456789&email=joao@email.com">Clique aqui para enviar por GET</a>
</body>
</html>
