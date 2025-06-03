<?php
include_once 'db.php';

$sql = "SELECT COUNT(*) AS total FROM vagas";
$result = $conn->query($sql);

if ($result) {
    $dados = $result->fetch_assoc();
    echo $dados['total'];
} else {
    echo "0";
}

$conn->close();
?>
