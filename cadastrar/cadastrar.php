<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <title>Cadastrar</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body class="bg-white">

    <div class="container d-flex justify-content-center align-items-center mt-5 " >
        <div class="card p-4 shadow-lg bg-dark text-white" style="width: 400px;">
            <h3 class="text-center mb-3">Faça seu Cadastro</h3>
             <!-- 🔥 Mensagem -->
            <?php
            if (isset($_SESSION['msg'])) {
                echo "<div class='alert alert-info'>" . $_SESSION['msg'] . "</div>";
                unset($_SESSION['msg']);
            }
            ?>

            <div class="mb-2">
                <label for="usuario" class="form-label">Selecione:</label>
                <select name="usuario" id="usuario" 
                class="form-control bg-white text-dark border-light" required>
                    <option value="">Selecione uma opção</option>
                    <option value="aluno">Aluno</option>
                    <option value="empresa">Empresa</option> 
                    <option value="instituicao">Instituição</option> 
                </select>
            </div>

            <!-- Formulário do Estudante -->
            <form id="form-aluno" class="d-grid gap-3 ocultar" action="../php/cadastro.php" method="POST">
                <h5>Cadastro de Estudante</h5>
                <input type="hidden" name="perfil" id="perfil">

                <div class="mb-2">
                    <label for="nome-estudante" class="form-label">Nome Completo:</label>
                    <input type="text" id="nome-estudante" name="nome-estudante" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" id="cpf" name="cpf" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="telefone" class="form-label">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" class="form-control bg-white text-dark border-light" required>
                </div>
                <!-- Usuário e Senha -->
                <div class="mb-2">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="senha-estudante" class="form-label">Senha:</label>
                    <input type="password" id="senha-estudante" name="senha" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="confirmar-senha" class="form-label">Confirmar senha:</label>
                    <input type="password" id="confirmar-senha" name="confirmar-senha" class="form-control bg-white text-dark border-light" required>

                </div>
                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            </form>

            <!-- Formulário da Empresa -->
            <form id="form-empresa" class="d-grid gap-3 ocultar" action="../php/cadastro.php" method="POST">
                <h5>Cadastro de Empresa</h5>
                <input type="hidden" name="perfil" id="perfil">

                <div class="mb-2">
                    <label for="nome-empresa" class="form-label">Nome da Empresa:</label>
                    <input type="text" id="nome-empresa" name="nome-empresa" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="cnpj-empresa" class="form-label">CNPJ:</label>
                    <input type="text" id="cnpj-empresa" name="cnpj-empresa" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="email-empresa" class="form-label">Email:</label>
                    <input type="text" id="email-empresa" name="email-empresa" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="telefone-empresa" class="form-label">Telefone:</label>
                    <input type="text" id="telefone-empresa" name="telefone-empresa" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="endereco-empresa" class="form-label">Endereço:</label>
                    <input type="text" id="endereco-empresa" name="endereco-empresa" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="responsavel" class="form-label">Nome do responsável:</label>
                    <input type="text" id="responsavel" name="responsavel" class="form-control bg-white text-dark border-light" required>
                </div>
                <!-- Usuário e Senha -->
                <div class="mb-2">
                    <label for="senha-empresa" class="form-label">Senha:</label>
                    <input type="password" id="senha-empresa" name="senha-empresa" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="confirmar-senha-empresa" class="form-label">Confirmar Senha:</label>
                    <input type="password" id="confirmar-senha-empresa" name="confirmar-senha-empresa" class="form-control bg-white text-dark border-light" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            </form>

                 <!--   Formulário da Instituição -->
            <form id="form-instituicao" class="d-grid gap-3 ocultar" action="../php/cadastro.php" method="POST">
                <h5>Cadastro de Administrador</h5>
                <input type="hidden" name="perfil" id="perfil">

                <div class="mb-2">
                    <label for="nome-instituicao" class="form-label">Nome da Instituição:</label>
                    <input type="text" id="nome-instituicao" name="nome-instituicao" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="cnpj-admin" class="form-label">CNPJ:</label>
                    <input type="text" id="cnpj-admin" name="cnpj-admin" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="cursos-admin" class="form-label">Cursos Ofertados:</label>
                    <input type="text" id="cursos-admin" name="cursos-admin" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="telefone-admin" class="form-label">Telefone:</label>
                    <input type="tel" id="telefone-admin" name="telefone-admin" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="endereco-admin" class="form-label">Endereço:</label>
                    <input type="text" id="endereco-admin" name="endereco-admin" 
                    class="form-control bg-white text-dark border-light" required>
                </div> 
                <!-- Usuário e Senha -->
                <div class="mb-2">
                    <label for="usuario-admin" class="form-label">Usuário:</label>
                    <input type="text" id="usuario-admin" name="usuario-admin" class="form-control bg-white text-dark border-light" required>
                </div>
                <div class="mb-2">
                    <label for="senha-admin" class="form-label">Senha:</label>
                    <input type="password" id="senha-admin" name="senha-admin" class="form-control bg-white text-dark border-light" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            </form>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="../script/script.js"></script>

</body>
</html>
