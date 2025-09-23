1. Integrantes do Grupo
------------------------
- Nome: Adriel Fernando Velosa  
  RA: 2022901

- Nome: Carolina Cardoso Froehlich 
  RA: 2025999

- Nome: Leonardo Souza Laudelino Neto
  RA: 2034248

- Nome: Pedro Furlan
  RA: 2039555

2. Como Executar o Projeto
---------------------------
  Pré-requisitos:
- PHP instalado (versão 7.4 ou superior)
- Composer instalado (https://getcomposer.org/)
- Visual Studio Code instalado

Passo a Passo para Execução:

1. Abra o Visual Studio Code.

2. No VS Code, clique em "Arquivo" > "Abrir Pasta..." e selecione a pasta do projeto.

3. Abra o terminal integrado:  
   No menu, vá em "Terminal" > "Novo Terminal"  
   Ou use o atalho:
   - `Ctrl + ` ` (crase) no Windows/Linux
   - `Cmd + ` ` no macOS


4. Instale as dependências do projeto com o Composer:
   composer install

5. Execute o sistema com o comando:
   php index.php


> O sistema roda diretamente no terminal do VS Code, sem interface gráfica ou banco de dados.  
> Todos os dados são armazenados em memória durante a execução.

3. Funcionamento do Sistema
----------------------------
O "Cinema-Inteligente" é uma aplicação de linha de comando desenvolvida em PHP para gerenciar operações básicas de um cinema.

  Funcionalidades disponíveis:
- Cadastro de Cliente: Adiciona clientes com nome, sobrenome e idade.
- Listar Filmes
- Cadastrar Cliente em Sessão
- Listar Sessões
- Exibir Cardápio

  Fluxo de Uso:
1. O usuário inicia o sistema no terminal com o comando `php index.php`.
2. Um menu é exibido com as opções disponíveis.
3. O usuário escolhe a ação desejada (ex: cadastrar cliente, listar filmes).
4. O sistema solicita as informações necessárias e executa a ação.
5. As informações são mantidas localmente até que o usuário selecione a opção "0 - Sair" para encerrar o programa.

  Tecnologias Utilizadas:
- PHP (executado no terminal)
- Composer (gerenciador de dependências)
- Visual Studio Code (ambiente de desenvolvimento)

---
