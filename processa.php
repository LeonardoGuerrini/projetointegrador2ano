<?php
session_start();
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['produtos']) && isset($_POST['formaPagamento'])) {
        if (!isset($_SESSION['id'])) {
            echo "Você precisa estar logado para realizar uma compra.";
            exit();
        }

        $id_cliente = $_SESSION['id']; // ID do cliente logado
        $dtcompra = date('Y-m-d');
        $formaPagamento = $_POST['formaPagamento'];
        $produtos = $_POST['produtos'];
        $quantidades = $_POST['estoque'];
        $precos = $_POST['preco'];

        $valortotal = 0;

        echo $_SESSION['nome'] . ", sua compra foi efetuada com sucesso!<br><br>";
        echo "Livro(s) comprado(s):<ul>";

        // Calcula o valor total da compra
        foreach ($produtos as $id_produto) {
            $quantidade = intval($quantidades[$id_produto]); // Quantidade selecionada
            $preco = floatval($precos[$id_produto]); // Preço do produto
            $valor_produto = $preco * $quantidade; // Valor total do produto (preço * quantidade)
        
            // Consulta para pegar o nome do produto
            $sql_nome_produto = "SELECT nome FROM livro WHERE id = ?";
            $stmt_nome_produto = $mysqli->prepare($sql_nome_produto);
            $stmt_nome_produto->bind_param("i", $id_produto);
            $stmt_nome_produto->execute();
            $stmt_nome_produto->bind_result($nome_produto);
            $stmt_nome_produto->fetch();
            $stmt_nome_produto->close();
        
            // Atualiza o valor total da compra
            $valortotal += $valor_produto;
        
            // Exibe o nome do produto comprado, a quantidade e o valor total do produto
            echo "<li>Produto: $nome_produto - Quantidade: $quantidade - Valor: R$ " . number_format($valor_produto, 2, ",", ".") . "</li>";
        }

        // Garante que o valor total tenha duas casas decimais
        $valortotal = round($valortotal, 2);  // Arredonda para 2 casas decimais

        // Exibe o valor total antes de inserir no banco
        echo "</ul>";
        echo "Valor Total: R$ " . number_format($valortotal, 2, ",", ".") . "<br>";

        // Insere uma única vez a compra na tabela 'compras'
        $sql = "INSERT INTO compras (id_cliente, dtcompra, valortotal, metodo) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssds", $id_cliente, $dtcompra, $valortotal, $formaPagamento);
        $stmt->execute();

        echo "Obrigado por sua compra!<br><br><br>";
        echo "<a href='index.php' style='padding: 10px; border: none; border-radius: 12px; font-size: 14px; background-color: black; color: white; cursor: pointer; text-decoration: none; font-family: sans-serif;'>Página Inicial</a>";
    } else {
        echo "Por favor, selecione os produtos e a forma de pagamento.<br><br><br>";
        echo "<a href='index.php' style='padding: 10px; border: none; border-radius: 12px; font-size: 14px; background-color: black; color: white; cursor: pointer; text-decoration: none; font-family: sans-serif;'>Página Inicial</a>";
    }
}
?>
