<?php
    /*
        CREATE DATABASE Cadastro;

        CREATE TABLE Users (id INT AUTO_INCREMENT, nome VARCHAR(255), email VARCHAR(255), senha VARCHAR(255));

        INSERT INTO Users (nome, email, senha) VALUES ($nome, $email, $senha);
    */
    session_start();
    function Database () {
        $servername = "localhost";
        $database = "Cadastro";
        $username = "root";
        $password = "sua_senha_aqui";

        $conn = new mysqli($servername, $username, $password, $database);
        return $conn;
    }
    $banco = Database();

    $email = $_POST['email_cad'];
    $senha = $_POST['senha_cad'];
    $nome = $_POST['nome_cad'];

    $sql = "INSERT INTO Users(email, nome, senha) VALUES ('$email', '$nome', '$senha');";
    $result = $banco->query($sql);
?>
