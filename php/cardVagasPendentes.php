<?php
include_once 'db.php';

$sql = "SELECT COUNT(*) AS pendentes FROM vagas WHERE status = 'Pendente'";
$result = $conn->query($sql);

if ($result) {
    $dados = $result->fetch_assoc();
    echo $dados['pendentes'];
} else {
    echo "0";
}

$conn->close();
?>
