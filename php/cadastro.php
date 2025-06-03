<?php
include_once 'db.php'; // conexão com o banco

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo_usuario = $_POST['perfil'];

    if (empty($tipo_usuario)) {
        die("Tipo de usuário não selecionado.");
    }

    if ($tipo_usuario == "aluno") {
        $nome = $_POST['nome-estudante'];
        $nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

        // Inserir na tabela usuarios
        $sql = "INSERT INTO usuarios (email, senha, tipo_usuario) VALUES (?, ?, 'aluno')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $idUsuario = $stmt->insert_id;
        $stmt->close();

        // Inserir na tabela aluno
        $sqlAluno = "INSERT INTO alunos (nome, cpf, telefone, data_nascimento, id_usuario) VALUES (?, ?, ?, ?, ?)";
        $stmtAluno = $conn->prepare($sqlAluno);
        $stmtAluno->bind_param("ssssi", $nome, $cpf, $telefone, $nascimento, $idUsuario);
        $stmtAluno->execute();
        $stmtAluno->close();

    } elseif ($tipo_usuario == "empresa") {
        $nome = $_POST['nome-empresa'];
        $cnpj = $_POST['cnpj-empresa'];
        $email = $_POST['email-empresa'];
        $telefone = $_POST['telefone-empresa'];
        $endereco = $_POST['endereco-empresa'];
        $responsavel = $_POST['responsavel'];
        $senha = password_hash($_POST['senha-empresa'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (email, senha, tipo_usuario) VALUES (?, ?, 'empresa')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $idUsuario = $stmt->insert_id;
        $stmt->close();

        $sqlEmpresa = "INSERT INTO empresa (nome, cnpj, telefone, endereco, responsavel, id_usuario) VALUES (?, ?, ?, ?, ?, ?)";
        $stmtEmpresa = $conn->prepare($sqlEmpresa);
        $stmtEmpresa->bind_param("sssssi", $nome, $cnpj, $telefone, $endereco, $responsavel, $idUsuario);
        $stmtEmpresa->execute();
        $stmtEmpresa->close();

    } elseif ($tipo_usuario == "instituicao") {
        $nome = $_POST['nome-instituicao'];
        $cnpj = $_POST['cnpj-admin'];
        $cursos = $_POST['cursos-admin'];
        $telefone = $_POST['telefone-admin'];
        $endereco = $_POST['endereco-admin'];
        $usuario = $_POST['usuario-admin'];
        $senha = password_hash($_POST['senha-admin'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (email, senha, tipo_usuario) VALUES (?, ?, 'instituicao')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $usuario, $senha);
        $stmt->execute();
        $idUsuario = $stmt->insert_id;
        $stmt->close();

        $sqlInstituicao = "INSERT INTO instituicao (nome, cnpj, cursos, telefone, endereco, id_usuario) VALUES (?, ?, ?, ?, ?, ?)";
        $stmtInstituicao = $conn->prepare($sqlInstituicao);
        $stmtInstituicao->bind_param("sssssi", $nome, $cnpj, $cursos, $telefone, $endereco, $idUsuario);
        $stmtInstituicao->execute();
        $stmtInstituicao->close();
    }

    // Redireciona após cadastro
    header('Location: ../tela_login/index.php');
    exit();

} else {
    echo "Requisição inválida.";
}
?>
