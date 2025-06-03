<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 
     <!-- Estilo customizado -->
     <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <header class="home">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container">
                <a href="#" class="navbar-brand">
                <img src="img/logo.png" alt="" width="142">
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav-principal">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a onclick="login()" class="btn btn-outline-black ml-4 btn-lg ">Entrar</a>
                    </li>
                    <li  class="nav-item">
                      <a onclick="cadastrar()" class="btn btn-outline-black ml-4 btn-lg">Cadastrar</a>
                  </li>
                </ul>
            </div>
            </div>

        </nav>
    </header> <!--Fim do cabeçalho-->
    <section class="home"><!-- Início seção home -->
        <div class="container">
          <div class="row">
            <div class="col-md-6 d-flex"><!-- Textos da seção -->
              <div class="align-self-center">
                <h1 class="display-4">Encontre sua vaga de estágio aqui!</h1>
                <p>
                  A melhor plataforma de estagio da atualidade
                </p>
  
                <form class="mt-4 mb-4">
                  <div class="input-group input-group-lg">
                    <input type="text" placeholder="Encontre sua vaga de estágio" class="form-control">
                    <div class="input-group-append">
                      <button onclick="vagas()"  type="button" class="btn btn-primary">Pesquisar</button>
                    </div>
                  </div>
                </form>
  
                <p>Disponível para
                  <a href="" class="btn btn-outline-light">
                    <i class="fab fa-android fa-lg"></i>
                  </a>
                  <a href="" class="btn btn-outline-light">
                    <i class="fab fa-apple"></i>
                  </a>
                </p>
  
              </div>
            </div><!--/fim textos da seção -->
            <div class="col-md-6 d-none d-md-block">
             
            </div>
          </div>
        </div>
      </section><!--/fim seção home -->

      <section class="caixa">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                        <h2>Por que devo usar essa plataforma?</h2>
                        <p>Está em busca do primeiro passo para sua carreira? No [Nome do Seu Site], conectamos estudantes a oportunidades incríveis em empresas que valorizam talentos em formação!</p>
                        
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Pode adicionar imagem aqui se quiser -->
            </div>
        </div>
    </section>
    
    <!-- Seção  -->
    <section> 
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Pode adicionar imagem aqui se quiser -->
                </div>
                <div class="col-md-6 d-flex">
                    <div class="align-self-center">
                        <h2>Pare de perder tempo</h2>
                        <p>
                             Centenas de vagas atualizadas <br>
                             Empresas confiáveis e com planos de crescimento <br>
                             Fácil de usar: cadastre seu perfil e se candidate em poucos cliques
                        </p>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    
   -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Fácil de usar</h4>
                    <p>Nosso sistema foi criado para ser intuitivo e eficiente,
             permitindo que você encontre oportunidades e gerencie sua carreira com poucos cliques!!</p>
                </div> 
                <div class="col-md-4">
                    <h4>Rápido</h4>
                    <p>O Conect.me vai além do básico, permitindo que você localize vagas de estágio de forma rápida. Simples como deve ser!</p>
                </div>
                <div class="col-md-4">
                    <h4>Faça seu currículo</h4>
                    <p>Precisando de um currículo bem estruturado para destacar suas habilidades e experiências? Nossa função de criação de currículos organiza suas informações de forma clara e profissional, garantindo que você cause uma ótima impressão!</p>
                </div>
            </div>
        </div>
    </section>
    <footer class="mt-4 mb-4 bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Conect.me</h2>
            <p>Conectando estudantes a oportunidades de estágio</p>
          </div>
          <div class="col-md-4">
            <h2>Contato</h2>
            <p>(24)98812-4748</p>
          </div>
          <div class="col-md-4">
            <h2>Redes Sociais</h2>
            <a href="" class="btn btn-outline-light">
              <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="" class="btn btn-outline-light">
              <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="" class="btn btn-outline-light">
              <i class="fab fa-twitter fa-2x"></i>
            </a>
          </div>
        </div>
      </div>
    </footer>
    
  
  
      <!-- JavaScript (Opcional) -->
      <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="../script/script.js"></script>
</body>
</html>