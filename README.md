# Cadastro de Policiais - PHP/Laravel

Este projeto é um sistema CRUD (Create, Read, Update, Delete) para cadastro e gestão de policiais. O projeto foi desenvolvido com o framework Laravel e utiliza o banco de dados local, configurado no XAMPP.

## Funcionalidades

- **Cadastro de Policiais**: Registrar informações sobre policiais como nome, matrícula, cargo e especialidade.
- **Edição de Policiais**: Atualizar os dados de um policial.
- **Exclusão de Policiais**: Excluir registros de policiais do sistema.
- **Visualização de Policiais**: Exibir uma lista de policiais cadastrados.
- **Banco de Dados Local**: O sistema utiliza o MySQL configurado no XAMPP para persistir os dados.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP utilizado para o desenvolvimento do backend.
- **MySQL**: Banco de dados utilizado para armazenar as informações dos policiais.
- **XAMPP**: Pacote que inclui o MySQL e o Apache, facilitando a configuração do ambiente de desenvolvimento local.
- **Bootstrap**: Framework CSS utilizado para criar uma interface de usuário simples e responsiva.

## Pré-requisitos

- **PHP** 8.x ou superior
- **Composer** para gerenciar dependências do Laravel
- **XAMPP** com MySQL ativo

## Como Rodar o Projeto

### Passo 1: Clonar o repositório

Clone o repositório para o seu computador:

```bash
git clone https://github.com/GabrielViniciusLCM/Gerenciamento-Policiais.git
```

### Passo 2: Configurar o ambiente

1. **Instale as dependências do Laravel** com o Composer:

```bash
cd Gerenciamento-Policiais
composer install
```

2. **Configurar o banco de dados**:

   - Abra o painel de controle do XAMPP e inicie o Apache e o MySQL.
   - Crie um banco de dados no **phpMyAdmin** (acessível em `http://localhost/phpmyadmin/`) com o nome `crud_policiais`.
   
3. **Configurar as credenciais do banco de dados** no arquivo `.env`:

   - Abra o arquivo `.env` no diretório raiz do projeto e configure os parâmetros do banco de dados conforme abaixo:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=gerenciamento_policiais
DB_USERNAME=root
DB_PASSWORD=
```

### Passo 3: Executar as migrações

Execute as migrações para criar as tabelas no banco de dados:

```bash
php artisan migrate
```

### Passo 4: Rodar o servidor local

Execute o seguinte comando para iniciar o servidor de desenvolvimento do Laravel:

```bash
php artisan serve
```

Agora, o sistema estará rodando no endereço `http://127.0.0.1:8000`.

### Passo 5: Acessar o sistema

Abra seu navegador e acesse o sistema em:  
`http://127.0.0.1:8000/inicio`

