<?php 

require_once 'vendor/autoload.php';

use Unimar\TrabalhoGustavo\Cliente;
use Unimar\TrabalhoGustavo\Filme;
use Unimar\TrabalhoGustavo\Sessao;

# FUNÇÕES AUXILIARES - CARDÁPIO

function exibirCardapio(): void {
    echo "\n=== CARDÁPIO CINEMA ===\n";

    echo "\n--- COMBOS ---\n";
    echo "1 - Combo Super (Pipoca Grande + 2 Refrigerantes Grandes)\n";
    echo "2 - Combo Casal (Pipoca Média + 2 Refrigerantes Médios)\n";
    echo "3 - Combo Individual (Pipoca Pequeno + 1 Refrigerante Pequeno)\n";

    echo "\n--- PIPOCAS ---\n";
    echo "4 - Pipoca Salgada\n";
    echo "5 - Pipoca Doce\n";
    echo "6 - Pipoca com Manteiga\n";

    echo "\n--- BEBIDAS ---\n";
    echo "7 - Refrigerante (Linha Coca-Cola, Guaraná)\n";
    echo "8 - Suco (Laranja, Uva, Morango)\n";
    echo "9 - Água Mineral (com ou sem gás)\n";

    echo "\n--- DOCES ---\n";
    echo "10 - Chocolate (Tablete)\n";
    echo "11 - M&M\n";

    echo "0 - SAIR DO CARDÁPIO\n";
}

function escolhaCardapio(string $opcaoCardapio): bool {
    switch ($opcaoCardapio) {
        case '1': echo "\n>> Você selecionou: 'Combo Super'\n"; break;
        case '2': echo "\n>> Você selecionou: 'Combo Casal'\n"; break;
        case '3': echo "\n>> Você selecionou: 'Combo Individual'\n"; break;
        case '4': echo "\n>> Você selecionou: 'Pipoca Salgada'\n"; break;
        case '5': echo "\n>> Você selecionou: 'Pipoca Doce'\n"; break;
        case '6': echo "\n>> Você selecionou: 'Pipoca com Manteiga'\n"; break;
        case '7': echo "\n>> Você selecionou: 'Refrigerante'\n"; break;
        case '8': echo "\n>> Você selecionou: 'Suco'\n"; break;
        case '9': echo "\n>> Você selecionou: 'Água Mineral'\n"; break;
        case '10': echo "\n>> Você selecionou: 'Chocolate'\n"; break;
        case '11': echo "\n>> Você selecionou: 'M&M'\n"; break;
        case '0': echo "\nSaindo do cardápio...\n"; return false; 
        default: echo "\nOpção inválida!\n"; break;
    }
    readline("Pressione Enter para continuar...");
    return true; 
}

# FUNÇÕES DE PRÉ-CADASTRO

function filmesPreCadastrados(): array {
    return [
        new Filme("Matrix", "2h16", 14),
        new Filme("Vingadores", "2h30", 12),
        new Filme("Toy Story", "1h30", 0),
        new Filme("Tropa de Elite", "1h40", 18),
        new Filme("Cidade de Deus", "2h35", 16),
        new Filme("O Auto da Compadecida", "3h45", 10),
    ];
}

function sessoesPreCadastradas(array $filmes): array {
    return [
        new Sessao($filmes[0], 1, "18:00", []),
        new Sessao($filmes[0], 2, "20:30", []),
        new Sessao($filmes[1], 3, "17:00", []),
        new Sessao($filmes[1], 4, "21:00", []),
        new Sessao($filmes[2], 5, "15:00", []),
        new Sessao($filmes[2], 6, "19:00", []),
        new Sessao($filmes[3], 7, "18:30", []),
        new Sessao($filmes[3], 8, "21:30", []),
        new Sessao($filmes[4], 9, "17:30", []),
        new Sessao($filmes[4], 10, "20:00", []),
        new Sessao($filmes[5], 11, "16:00", []),
        new Sessao($filmes[5], 12, "19:30", []),
    ];
}

# INICIALIZAÇÃO DE ARRAYS

$filmes = filmesPreCadastrados();
$clientes = [];
$sessoes = sessoesPreCadastradas($filmes);

# MENU PRINCIPAL

do {
    echo "\n=== MENU CINEMA ===\n";
    echo "1 - Listar Filmes\n";
    echo "2 - Cadastrar Cliente\n";
    echo "3 - Cadastrar Cliente em Sessão\n";
    echo "4 - Listar Sessões\n";
    echo "5 - Cardápio\n";
    echo "0 - Sair\n";

    $opcao = (int) readline("Escolha uma opção: ");

    switch ($opcao) {

        # CASE 1 - LISTAR FILMES

        case 1:
            echo "\n=== FILMES DISPONÍVEIS ===\n";
            foreach ($filmes as $i => $filme) {
                echo ($i + 1) . " - " . $filme->getTitulo() 
                    . " | Duração: " . $filme->getDuracao() 
                    . " | Classificação: " . $filme->getClassificacao() . " anos\n";
            }
            readline("\nPressione Enter para voltar...");
            break;

        # CASE 2 - CADASTRAR CLIENTE

        case 2:
            $nome = readline("Nome: ");
            $sobrenome = readline("Sobrenome: ");
            $idade = (int)readline("Idade: ");
            $id = rand(1, 1000); 

            $clientes[] = new Cliente($idade, $nome, $sobrenome, $id);
            echo "Cliente cadastrado com sucesso!\n";
            readline("Pressione Enter para voltar...");
            break;

        # CASE 3 - CADASTRAR CLIENTE EM SESSÃO
        case 3:
            echo "\n=== SESSÕES DISPONÍVEIS ===\n";
            foreach ($sessoes as $i => $sessao) {
                echo $i . " - " . $sessao->getFilme()->getTitulo()
                    . " | Sala: " . $sessao->getSala()
                    . " | Horário: " . $sessao->getHorario()
                    . " | Classificação: " . $sessao->getFilme()->getClassificacao() . " anos\n";
            }

            $indiceSessao = (int) readline("Escolha a sessão: ");

            if (!isset($sessoes[$indiceSessao])) {
                echo "Sessão inválida.\n";
                break;
            }

            $nome = readline("Nome: ");
            $sobrenome = readline("Sobrenome: ");

            $clienteEncontrado = null;
            foreach ($clientes as $clienteAtual) {
                if ($clienteAtual->getNomeCompleto() === "$nome $sobrenome") {
                    $clienteEncontrado = $clienteAtual;
                    break;
                }
            }

            if (!$clienteEncontrado) {
                echo "Cliente não encontrado! Cadastre-se primeiro (opção 2).\n";
                break;
            }

            $classificacao = $sessoes[$indiceSessao]->getFilme()->getClassificacao();
            if ($clienteEncontrado->getIdade() >= $classificacao) {
                $sessoes[$indiceSessao]->adicionarCliente($clienteEncontrado);
            } else {
                echo "A classificação é de $classificacao anos. Cliente não pode assistir.\n";
            }
            readline("Pressione Enter para voltar...");
            break;

        # CASE 4 - LISTAR SESSÕES

        case 4:
            echo "\n=== SESSÕES DISPONÍVEIS ===\n";
            foreach ($sessoes as $i => $sessao) {
                $filme = $sessao->getFilme();
                echo ($i + 1) . " - Filme: " . $filme->getTitulo() 
                    . " | Sala: " . $sessao->getSala() 
                    . " | Horário: " . $sessao->getHorario() 
                    . " | Classificação: " . $filme->getClassificacao() . " anos\n";
            }
            readline("\nPressione Enter para voltar...");
            break;

        # CASE 5 - CARDÁPIO

        case 5:
            do {
                exibirCardapio(); 
                $opcaoCardapio = readline("Digite o número do que deseja: ");
            } while (escolhaCardapio($opcaoCardapio)); 
            break;

        # CASE 0 - SAIR

        case 0:
            echo "--- Fim do sistema ---\n";
            break;

        default:
            echo "Opção inválida!\n";
    }

} while ($opcao != 0);
