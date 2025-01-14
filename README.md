# Sistema de Cadastro - Projeto PHP

## Este projeto é uma aplicação web simples de cadastro e listagem de usuários, desenvolvida em PHP. Ele inclui funcionalidades básicas como cadastro, edição, exclusão e listagem de usuários, além de um layout responsivo e estilizado. Ideal para testes e aprendizado de conceitos fundamentais de desenvolvimento web.

# Recursos do Projeto

- Cadastro de usuários com validação de e-mail único.

- Edição de informações dos usuários com exibição em um modal.

- Exclusão de usuários com confirmação e recarregamento automático da página.

- Layout responsivo usando CSS e media queries.

- Separação de responsabilidades em arquivos específicos (PHP, CSS e JavaScript).

## Requisitos

- PHP 7.4 ou superior

- Servidor Apache ou similar (como XAMPP, WAMP ou LAMP)

- MySQL 5.7 ou superior

- Navegador moderno para acessar a aplicação

## Instalação

### Clone o Repositório

- git clone https://github.com/samuelwsouza/desafio-dev-web

## Configure o Servidor

### Certifique-se de que o servidor (XAMPP, WAMP ou LAMP) está ativo.

### Copie os arquivos do projeto para a pasta do servidor (geralmente htdocs no XAMPP):

- cp -r sistema-cadastro /caminho/para/htdocs/

## Configure o Banco de Dados

### Acesse o phpMyAdmin (geralmente em http://localhost/phpmyadmin).

### Crie um banco de dados chamado sistema_cadastro.

### Atualize as Configurações do Banco de Dados

#### Código SQL implementado no phpMyAdmin

```sql
CREATE DATABASE sistema_cadastro;
USE sistema_cadastro;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
```

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema_cadastro";

## Inicie o Projeto

### Acesse a aplicação no navegador:

http://localhost/sistema-cadastro/

## Estrutura do Projeto

/sistema-cadastro
├── actions/          # Scripts de backend para ações como cadastro, edição e exclusão.
├── assets/           # Imagens e ícones usados na aplicação.
├── css/              # Arquivos de estilo (CSS).
├── js/               # Scripts JavaScript para interatividade.
├── header.php        # Cabeçalho comum entre as páginas.
├── home.php          # Página inicial.
├── cadastro.php      # Página de cadastro de usuários.
├── listagem.php      # Página de listagem de usuários.
├── index.php         # Roteamento central das páginas.
├── README.md         # Documentação do projeto.

## Funcionalidades Principais

### Cadastro de Usuários

- Navegue para a página de cadastro (/cadastro).

- Preencha o formulário com nome, e-mail e senha.

- Validação de e-mail único com mensagem de erro caso o e-mail já exista.

### Listagem de Usuários

- Acesse a página de listagem (/listagem).

- Veja a tabela de usuários cadastrados.

### Edição de Usuários

- Clique no botão Editar na tabela de listagem.

- Um modal será exibido para alterar nome ou e-mail.

- Salve as alterações e veja a atualização imediata.

### Exclusão de Usuários

- Clique no ícone de lixeira para excluir um usuário.

- Confirmação será exibida antes de prosseguir.

### Responsividade

- O projeto foi projetado para ser acessível tanto em dispositivos desktop quanto em dispositivos móveis. Para telas menores (abaixo de 768px):

- A interface utiliza grid e flexbox para reorganizar os elementos verticalmente.

- Botões são dispostos em uma única coluna.

## Licença

Este projeto está sob a licença MIT. Sinta-se à vontade para usar, modificar e distribuir conforme necessário.

Desenvolvido por Samuel Willians

[LinkedIn](https://www.linkedin.com/in/samuel-willians-de-souza-444a6a1b4/)