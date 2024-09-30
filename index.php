<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>CRUD em Dupla</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cadastro">
        <h1>Cadastro de Usuário</h1>
        <form action="index.php" method="POST">
            <label for="user_nome">Nome do Usuário:</label>
            <input type="text" id="user_nome" name="user_nome" required>
            <button style="display:block;" type="submit">Cadastrar Usuário</button>
        </form>
    </div>
    <div class="cadastro">
        <h1>Cadastro de Nota</h1>
        <form action="index.php" method="POST">
            <label for="nota_texto">Texto da Nota:</label>
            <input type="text" id="nota_texto" name="nota_texto" required>
            <button style="display:block;" type="submit">Cadastrar Nota</button>
        </form>
    </div>
</body>
</html>
