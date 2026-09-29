<?php

$conexao = new mysqli("localhost", "root", "Senai@118", "exercicio");

if ($conexao->connect_error) {
    die("Erro na conexão com o banco: " . $conexao->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];

    if ($nome == "") {
        echo "Digite o nome do produto.";
    } elseif ($preco <= 0) {
        echo "O preço deve ser maior que zero.";
    } else {

        $sql = "INSERT INTO produtos (nome, preco)
                VALUES ('$nome', '$preco')";

        if ($conexao->query($sql)) {
            echo "Produto cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $conexao->error;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>

<body>

    <h1>Cadastro de Produtos</h1>

    <form method="POST">

        <label>Nome do produto:</label>
        <input type="text" name="nome">

        <br><br>

        <label>Preço:</label>
        <input type="number" name="preco" step="0.01">

        <br><br>

        <button type="submit">Cadastrar</button>

    </form>

</body>

</html>