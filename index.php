<?php

$username = 'root';
$password = 'COLOQUE_SUA_SENHA_AQUI';


$conn = new PDO('mysql:host=localhost;dbname=meuBancoDeDados', $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Mostra todos os usuários do sexo masculino
$sexo_atual = 'masculino';
$data = $conn->query('SELECT * FROM Users WHERE sexo = ' . $conn->quote($sexo_atual));
foreach($data as $row) {
    print_r($row);
}

//Mostra todos os usuários do sexo feminino
$sexo_atual = 'feminino';
$data =	$conn->query('SELECT * FROM Users WHERE sexo = ' . $conn->quote($sexo_atual));
foreach($data as $row) {
    print_r($row);
}

//Mostra média de idades de todos os usuários
$data = $conn->query('SELECT AVG(idade) FROM Users');
print_r($data);


//Mostra informações completas de um usuário, que será passado via requisição POST
//usando o parâmetro 'user'.
//   http://appsite.com/analise.php?user=^NOME_DO_USUARIO^
$usuario = $_POST['user'];
$data = $conn->query('SELECT * FROM Users WHERE name = ' . $conn->quote($usuario));
foreach($data as $row) {
    print_r($row);
}

//Mostra quantidade total de usuários cadastrados
$data = $conn->query('SELECT * FROM Users');
$quantidade_total = mysql_num_rows($data);

echo "$quantidade_total usuários cadastrados no banco.\n";
