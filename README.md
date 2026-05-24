# Cadastro de Veículos

Sistema simples para cadastro e listagem de veículos, desenvolvido com HTML, CSS, JavaScript, PHP e MySQL.

## Funcionalidades

- Cadastro de veículos com dados como placa, marca, modelo, ano, cor, combustível, quilometragem, chassi, Renavam, data e observações.
- Validação básica de campos obrigatórios.
- Inserção dos dados no banco MySQL.
- Listagem dos veículos cadastrados em uma tabela.
- Comunicação entre frontend e backend usando `fetch` e respostas em JSON.

## Tecnologias utilizadas

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL

## Estrutura do projeto

```text
.
├── banco.sql
├── index.html
├── listar.html
├── README.md
├── css
│   └── style.css
├── js
│   ├── cadastro.js
│   └── listar.js
└── php
    ├── conexao.php
    ├── inserir_veiculo.php
    └── listar_veiculos.php
```

## Como executar o projeto

### 1. Clone ou copie o projeto

Coloque a pasta do projeto dentro do diretório do seu servidor local, por exemplo:

- `htdocs`, se estiver usando XAMPP;
- `www`, se estiver usando WampServer ou Laragon.

### 2. Crie o banco de dados

Abra o phpMyAdmin ou outro cliente MySQL e execute o arquivo:

```sql
banco.sql
```

Esse script cria o banco `sistema_veiculos` e a tabela `veiculos`.

### 3. Configure a conexão

No arquivo `php/conexao.php`, confira se os dados de acesso ao MySQL estão corretos:

```php
$host = 'localhost';
$usuario = 'root';
$senha = "";
$banco = "sistema_veiculos";
```

Altere usuário, senha ou host caso seu ambiente local use outra configuração.

### 4. Acesse no navegador

Com Apache e MySQL iniciados, abra:

```text
http://localhost/prova-facul/
```

Para listar os veículos cadastrados, acesse:

```text
http://localhost/prova-facul/listar.html
```

## Principais arquivos

- `index.html`: página com o formulário de cadastro.
- `listar.html`: página com a tabela de veículos cadastrados.
- `js/cadastro.js`: envia os dados do formulário para o PHP.
- `js/listar.js`: busca os veículos cadastrados e monta a tabela.
- `php/conexao.php`: realiza a conexão com o banco de dados.
- `php/inserir_veiculo.php`: valida e cadastra um novo veículo.
- `php/listar_veiculos.php`: retorna os veículos cadastrados em JSON.
- `banco.sql`: script de criação do banco e da tabela.

## Observação

Este projeto foi criado para fins acadêmicos e usa uma estrutura simples, ideal para praticar integração entre frontend, PHP e banco de dados MySQL.
