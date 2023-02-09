<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form method="post" action="enviar.php">
        <label for="Nome">Nome</label><br>
        <input type="text" name="nome" required><br><br>

        <label for="E-mail">E-mail</label><br>
        <input type="email" name="email" required><br><br>

        <label for="Idade">Idade</label><br>
        <input type="number" name="idade" required><br><br>

        <label for="Mensagem">Mensagem</label><br>
        <textarea name="msg" required cols="30" rows="10"></textarea><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>