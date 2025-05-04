// Função para mostrar uma seção e esconder as outras
function showSection(id) {
    // Esconde todas as seções principais
    document.querySelectorAll('.content-section').forEach(secao => {
      secao.classList.remove('active');
      secao.style.display = 'none';
    });
  
    // Mostra a seção correspondente ao botão clicado
    const secaoSelecionada = document.getElementById(id);
    if (secaoSelecionada) {
      secaoSelecionada.classList.add('active');
      secaoSelecionada.style.display = 'block';
    }
  
    // Se for a seção de vagas, ativa a primeira aba (Disponíveis)
    if (id === 'vagas') {
      mostrarSubsecao('disponiveis', document.querySelector('#abas-vagas button:first-child'));
    }
  }
  

// Aguarda o carregamento completo da página antes de executar qualquer código
document.addEventListener("DOMContentLoaded", function() {
    const disponiveis = document.getElementById('disponiveis');
    const candidatadas = document.getElementById('candidatadas');
    if (disponiveis && candidatadas) {
      disponiveis.style.display = 'block';
      candidatadas.style.display = 'none';
    }
  });
  
  
  /**
   * Função para alternar entre as abas de vagas
   * @param {string} id - O ID da subseção a ser exibida ("disponiveis" ou "candidatadas")
   * @param {HTMLElement} btnClicado - O botão que foi clicado para ativar a aba
   */
  function mostrarSubsecao(id, btnClicado) {
    // Esconde todas as subseções de vagas
    document.querySelectorAll('.subsecao').forEach(secao => {
      secao.style.display = 'none';
    });
  
    // Mostra a subseção correspondente ao botão clicado
    document.getElementById(id).style.display = 'block';
  
    // Atualiza a aparência dos botões para refletir a aba ativa
    document.querySelectorAll('#abas-vagas button').forEach(btn => {
      btn.classList.remove('btn-primary', 'active'); // Remove estilo de botão ativo
      btn.classList.add('btn-outline-primary'); // Adiciona estilo de botão inativo
    });
  
    // Ativa visualmente o botão que foi clicado
    btnClicado.classList.remove('btn-outline-primary');
    btnClicado.classList.add('btn-primary', 'active');
  }
  
  /**
   * Função para redirecionar para a tela de login
   */
  function login() {
      window.open("../tela_login/index.html", "_self"); 
  }
  
  /**
   * Função para redirecionar para a tela de cadastro
   */
  function cadastrar() {
      window.open("../cadastrar/cadastrar.html", "_self");
  }
  
  /**
   * Função para redirecionar para a tela de perfil
   */
  function perfil() {
      window.open("../perfil/index.html", "_self");
  }
  
  /**
   * Função para sair e voltar para a tela de login
   */
  function sair() {
      window.open("../tela_login/index.html", "_self");
  }
  
  /**
   * Função que exibe formulários dinamicamente dependendo da opção selecionada
   */
  document.getElementById("usuario")?.addEventListener("change", function () {
      let valorSelecionado = this.value;
  
      // Esconde todos os formulários antes de mostrar o correto
      document.querySelectorAll("form").forEach(form => {
          form.classList.add("ocultar");
      });
  
      // Mostra apenas o formulário correspondente à opção selecionada
      if (valorSelecionado) {
          document.getElementById(`form-${valorSelecionado}`).classList.remove("ocultar");
      }
  });
  

  
// Validação de formulário das abas curriculo

// Função para navegar entre as abas
function nextTab(tabId) {
    const triggerEl = document.getElementById(tabId);
    const tabTrigger = new bootstrap.Tab(triggerEl);
    tabTrigger.show();
}

// Função para adicionar nova experiência
document.getElementById('addExperiencia').addEventListener('click', function() {
    const container = document.getElementById('experiencias');
    const newItem = document.createElement('div');
    newItem.className = 'experiencia-item mb-4 p-3 border rounded';
    newItem.innerHTML = `
        <div class="d-flex justify-content-end mb-2">
            <button class="btn btn-outline-danger btn-sm remove-item">Remover</button>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Empresa</label>
                <input type="text" class="form-control" placeholder="Nome da empresa">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Cargo</label>
                <input type="text" class="form-control" placeholder="Seu cargo">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Data de Início</label>
                <input type="month" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Data de Término</label>
                <input type="month" class="form-control">
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Trabalho atual</label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição das atividades</label>
            <textarea class="form-control" rows="3" placeholder="Descreva suas principais atividades e responsabilidades..."></textarea>
        </div>
    `;
    container.appendChild(newItem);
    addRemoveListeners();
});

// Função para adicionar nova formação
document.getElementById('addFormacao').addEventListener('click', function() {
    const container = document.getElementById('formacoes');
    const newItem = document.createElement('div');
    newItem.className = 'formacao-item mb-4 p-3 border rounded';
    newItem.innerHTML = `
        <div class="d-flex justify-content-end mb-2">
            <button class="btn btn-outline-danger btn-sm remove-item">Remover</button>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Instituição</label>
                <input type="text" class="form-control" placeholder="Nome da instituição">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Curso</label>
                <input type="text" class="form-control" placeholder="Nome do curso">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Grau</label>
                <select class="form-select">
                    <option selected>Selecione o grau</option>
                    <option value="EnsinoMedio">Ensino Médio</option>
                    <option value="TecnicoProf">Técnico Profissionalizante</option>
                    <option value="Graduacao">Graduação</option>
                    <option value="PosGraduacao">Pós-Graduação</option>
                    <option value="MBA">MBA</option>
                    <option value="Mestrado">Mestrado</option>
                    <option value="Doutorado">Doutorado</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Situação</label>
                <select class="form-select">
                    <option value="Completo">Completo</option>
                    <option value="EmAndamento">Em Andamento</option>
                    <option value="Trancado">Trancado</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Data de Início</label>
                <input type="month" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Data de Conclusão</label>
                <input type="month" class="form-control">
            </div>
        </div>
    `;
    container.appendChild(newItem);
    addRemoveListeners();
});

// Função para adicionar novo idioma
document.getElementById('addIdioma').addEventListener('click', function() {
    const container = document.getElementById('idiomas');
    const newItem = document.createElement('div');
    newItem.className = 'idioma-item row mb-2';
    newItem.innerHTML = `
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Idioma">
        </div>
        <div class="col-md-5">
            <select class="form-select">
                <option selected>Nível de proficiência</option>
                <option value="Basico">Básico</option>
                <option value="Intermediario">Intermediário</option>
                <option value="Avancado">Avançado</option>
                <option value="Fluente">Fluente</option>
                <option value="Nativo">Nativo</option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-danger btn-sm remove-item w-100">Remover</button>
        </div>
    `;
    container.appendChild(newItem);
    addRemoveListeners();
});

// Função para adicionar nova habilidade técnica
document.getElementById('addHabilidadeTecnica').addEventListener('click', function() {
    const container = document.getElementById('habilidades-tecnicas');
    const newItem = document.createElement('div');
    newItem.className = 'habilidade-item row mb-2';
    newItem.innerHTML = `
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Habilidade (ex: JavaScript, Excel, Photoshop)">
        </div>
        <div class="col-md-5">
            <select class="form-select">
                <option selected>Nível de conhecimento</option>
                <option value="Basico">Básico</option>
                <option value="Intermediario">Intermediário</option>
                <option value="Avancado">Avançado</option>
                <option value="Especialista">Especialista</option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-danger btn-sm remove-item w-100">Remover</button>
        </div>
    `;
    container.appendChild(newItem);
    addRemoveListeners();
});

// Função para adicionar nova certificação
document.getElementById('addCertificacao').addEventListener('click', function() {
    const container = document.getElementById('certificacoes');
    const newItem = document.createElement('div');
    newItem.className = 'certificacao-item row mb-2';
    newItem.innerHTML = `
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Nome da certificação">
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Instituição">
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-danger btn-sm remove-item w-100">Remover</button>
        </div>
    `;
    container.appendChild(newItem);
    addRemoveListeners();
});

// Função para adicionar event listeners aos botões de remover
function addRemoveListeners() {
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', function() {
            const parentElement = this.closest('.experiencia-item, .formacao-item, .idioma-item, .habilidade-item, .certificacao-item');
            if (parentElement) {
                parentElement.remove();
            }
        });
    });
}

// Botão Salvar Currículo
document.getElementById('salvarCurriculo').addEventListener('click', function() {
    alert('Currículo salvo com sucesso!');
});

// Função para validar o formulário de estudante
// === 🔒 Impede envio de formulários ocultos (Solução 1 + 2 combinadas) ===
document.addEventListener('DOMContentLoaded', function () {
    const formEstudante = document.getElementById('form-estudante');

    if (formEstudante) {
        formEstudante.addEventListener('submit', async function (event) {
            event.preventDefault();

            // 🔒 Bloqueia envio se o formulário ainda estiver invisível
            if (formEstudante.classList.contains("ocultar")) {
                alert("Selecione 'Aluno' antes de preencher os dados.");
                return;
            }

            const nome = document.getElementById('nome-estudante').value;
            const data_nascimento = document.getElementById('data_nascimento').value;
            const cpf = document.getElementById('cpf').value;
            const telefone = document.getElementById('telefone').value;
            const email = document.getElementById('email').value;
            const senha = document.getElementById('senha-estudante').value;
            const confirmarSenha = document.getElementById('confirmar-senha').value;

            if (senha !== confirmarSenha) {
                alert('As senhas não coincidem!');
                return;
            }

            const aluno = {
                cpf,
                nome,
                data_nascimento,
                telefone,
                email,
                senha
            };

            try {
                const resposta = await fetch('http://localhost:3000/alunos', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(aluno)
                });

                const dados = await resposta.json();

                if (resposta.ok) {
                    alert('✅ Aluno cadastrado com sucesso!');
                    formEstudante.reset();
                } else {
                    alert('❌ Erro: ' + (dados.mensagem || 'Erro desconhecido'));
                    console.error(dados);
                }
            } catch (erro) {
                alert('Erro ao conectar com o servidor!');
                console.error(erro);
            }
        });
    }
});

// === 🧼 (Extra) Remove parâmetros da URL após reload ou erro ===
window.addEventListener("load", () => {
    history.replaceState({}, document.title, location.pathname);
});
// Intercepta todo submit e impede envio se for por erro ou sem seleção
document.querySelectorAll("form").forEach(form => {
    form.addEventListener("submit", function (e) {
        if (form.classList.contains("ocultar")) {
            e.preventDefault();
            alert("Você precisa selecionar uma opção antes de cadastrar!");
        }
    });
});

  