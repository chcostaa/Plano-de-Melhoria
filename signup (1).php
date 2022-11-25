<?php
    /*
        CREATE DATABASE Cadastro;

        CREATE TABLE Users (id INT AUTO_INCREMENT, nome VARCHAR(255), email VARCHAR(255), senha VARCHAR(255));

        INSERT INTO Users (nome, email, senha) VALUES ($nome, $email, $senha);
    */

    function Database () {
        $servername = "localhost";
        $database = "Cadastro";
        $username = "root";
        $password = "sua_senha_aqui";

        $conn = new mysqli($servername, $username, $password, $database);
        return $conn;
    }
    $banco = Database();

    $email = $_POST['email'];
    $senha = $_POST['password'];
    $nome = $_POST['nome'];

    $sql = "INSERT INTO Users(email, nome, senha) VALUES ('$email', '$nome', '$senha');";
    $result = $banco->query($sql);
?>
