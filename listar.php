<?php
include 'conexao.php';

$sql = "SELECT * FROM vagas ORDER BY data_aplicacao DESC";
$result = $conn->query($sql);

$vagas = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $vagas[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($vagas);
?>
