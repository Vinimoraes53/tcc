<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevClub Login</title>

    <!-- CSS externo -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"> 
</head>
<body>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow bg-dark text-white w-100" style="max-width: 400px;">

        <form action="../php/login.php" method="post">
            <h3 class="text-center mb-4">Login</h3>

            <!-- 🔥 Mensagem de erro -->
            <?php
            if (isset($_SESSION['erro'])) {
                echo "<div class='alert alert-danger'>" . $_SESSION['erro'] . "</div>";
                unset($_SESSION['erro']);
            }
            ?>

            <div class="input-box mb-3 position-relative">
                <input name="email" placeholder="Usuário" type="email"
                    class="form-control bg-white text-black border-light" required>
                <i class="bx bxs-user position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>

            <div class="input-box mb-3 position-relative">
                <input name="senha" placeholder="Senha" type="password"
                    class="form-control bg-white text-black border-light" required>
                <i class="bx bxs-lock-alt position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </div>

            <div class="remember-forgot d-flex justify-content-between mb-3">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input me-1">
                    Lembrar senha
                </label>
                <a href="#" class="text-white">Esqueci a senha</a>
            </div>

            <button  type="submit" class="btn btn-light w-100 mb-3">Login</button>

            <div class="register-link text-center">
                <p>Não tem uma conta? <a onclick="cadastrar()" href="#" class="text-info">Cadastre-se</a></p>
            </div>
        </form>

    </div>
</div>

<script src="../script/script.js"></script>    
</body>
</html>
