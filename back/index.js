const express = require('express');
const mysql = require('mysql2');
const app = express();
const port = 3000;

app.use(express.json());

// Conexão com o banco de dados
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '250616Av',
  database: 'estagio'
});

connection.connect((err) => {
  if (err) {
    console.error('Erro ao conectar ao banco de dados:', err);
    return;
  }
  console.log('Conectado ao banco de dados MySQL!');
});

// Rota para cadastrar um novo aluno
app.post('/alunos', (req, res) => {
  const { cpf, nome, data_nascimento, telefone, email, senha } = req.body;

  const query = `
    INSERT INTO Aluno (cpf, nome, data_nascimento, telefone, email, senha)
    VALUES (?, ?, ?, ?, ?, ?)
  `;

  connection.query(query, [cpf, nome, data_nascimento, telefone, email, senha], (err, results) => {
    if (err) {
      console.error('Erro ao inserir aluno:', err);
      res.status(500).json({ erro: 'Erro ao cadastrar aluno' });
      return;
    }

    res.status(201).json({ mensagem: 'Aluno cadastrado com sucesso', id: results.insertId });
  });
});

app.listen(port, () => {
  console.log(`Servidor rodando em http://localhost:${port}`);
});
// Rota para listar todos os alunos
app.get('/alunos', (req, res) => {
  const query = 'SELECT * FROM Aluno';

  connection.query(query, (err, results) => {
    if (err) {
      console.error('Erro ao buscar alunos:', err);
      res.status(500).json({ erro: 'Erro ao buscar alunos' });
      return;
    }

    res.status(200).json(results);
  });
});
// Rota para buscar um aluno específico por ID
app.get('/alunos/:id', (req, res) => {
  const id = req.params.id;

  const query = 'SELECT * FROM Aluno WHERE idAluno = ?';

  connection.query(query, [id], (err, results) => {
    if (err) {
      console.error('Erro ao buscar aluno:', err);
      res.status(500).json({ erro: 'Erro ao buscar aluno' });
      return;
    }

    if (results.length === 0) {
      res.status(404).json({ mensagem: 'Aluno não encontrado' });
    } else {
      res.status(200).json(results[0]); // Retorna o único aluno encontrado
    }
  });
});
// Rota para atualizar um aluno
app.put('/alunos/:id', (req, res) => {
  const id = req.params.id;
  const { cpf, nome, data_nascimento, telefone, email, senha } = req.body;

  const query = `
    UPDATE Aluno
    SET cpf = ?, nome = ?, data_nascimento = ?, telefone = ?, email = ?, senha = ?
    WHERE idAluno = ?
  `;

  connection.query(query, [cpf, nome, data_nascimento, telefone, email, senha, id], (err, result) => {
    if (err) {
      if (err.code === 'ER_DUP_ENTRY') {
        res.status(409).json({ mensagem: 'CPF ou Email já cadastrado.' });
      } else {
        console.error('Erro ao atualizar aluno:', err);
        res.status(500).json({ mensagem: 'Erro ao atualizar aluno.', erro: err });
      }
      return;
    }
  
    if (result.affectedRows === 0) {
      res.status(404).json({ mensagem: 'Aluno não encontrado' });
    } else {
      res.status(200).json({ mensagem: 'Aluno atualizado com sucesso!' });
    }
  });  
});
// Rota para deletar um aluno
app.delete('/alunos/:id', (req, res) => {
  const id = req.params.id;

  const query = 'DELETE FROM Aluno WHERE idAluno = ?';

  connection.query(query, [id], (err, result) => {
    if (err) {
      console.error('Erro ao deletar aluno:', err);
      res.status(500).json({ erro: 'Erro ao deletar aluno' });
      return;
    }

    if (result.affectedRows === 0) {
      res.status(404).json({ mensagem: 'Aluno não encontrado' });
    } else {
      res.status(200).json({ mensagem: 'Aluno deletado com sucesso' });
    }
  });
});
