# 📦 Cadastro de Produtos com PHP e MySQL

## 📚 Sobre a Atividade

Nesta atividade foi desenvolvido um sistema de cadastro de produtos utilizando **PHP, HTML e MySQL**. O objetivo foi criar um formulário para solicitar o nome e o preço de um produto, validar essas informações em PHP e, caso os dados estejam corretos, realizar a inserção no banco de dados.

## 🎯 Objetivo

O sistema foi desenvolvido para praticar a integração entre **PHP e MySQL**, trabalhando com formulários, conexão com banco de dados, validação de informações e inserção de registros em uma tabela.

## 🗄️ Banco de Dados

Foi utilizado o banco de dados `exercicio` e criada a tabela `produtos`.

A tabela possui os campos `id`, `nome` e `preco`. O campo `id` é utilizado como identificador automático dos produtos.

A tabela foi criada utilizando o seguinte comando SQL:

```sql
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);

## 💻 Funcionamento

O sistema apresenta um formulário com os campos **Nome do Produto** e **Preço**. Após o preenchimento, os dados são enviados para o PHP, que realiza a validação antes de fazer a inserção no banco de dados.

Primeiramente, o sistema verifica se o nome do produto não está vazio. Em seguida, verifica se o preço foi informado como um número maior que zero.

Quando os dados são válidos, o produto é inserido na tabela `produtos` e o sistema apresenta a mensagem:

> **Produto cadastrado com sucesso!**

Quando os dados são inválidos, uma mensagem de erro é apresentada ao usuário. Por exemplo:

> **Erro: O preço deve ser um número positivo.**

## 🔗 Tecnologias Utilizadas

- **PHP**
- **HTML**
- **MySQL**
- **XAMPP**
- **MySQL pelo CMD**

## 🧪 Testes Realizados

Foram realizados testes para verificar o funcionamento do sistema.

Um exemplo de cadastro válido foi:

- **Nome do Produto:** Mouse
- **Preço:** 50,00

Após o cadastro, o sistema apresentou a mensagem de sucesso e o registro pôde ser consultado no banco de dados utilizando o comando:

```sql
SELECT * FROM produtos;
