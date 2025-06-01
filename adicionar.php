<?php
include 'conexao.php';

$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];
$link = $_POST['link'];
$data = $_POST['data_aplicacao'];
$status = $_POST['status'];

$sql = "INSERT INTO vagas (empresa, cargo, link, status, data_aplicacao)
        VALUES ('$empresa', '$cargo', '$link', '$status', '$data')";

if ($conn->query($sql) === TRUE) {
    echo "Vaga adicionada com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
