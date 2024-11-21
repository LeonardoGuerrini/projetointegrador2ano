<?php
include('conexao.php');

$sql = "SELECT id_compra, id_cliente, dtcompra, valortotal, metodo FROM compras";
$result = $mysqli->query($sql);

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se existem produtos selecionados
    if (isset($_POST['produtos']) && isset($_POST['quantidade'])) {

        $id_cliente = $_POST['id_cliente'];
        $metodo = $_POST['formaPagamento'];  // método de pagamento

        // Calculando o valor total da compra
        $valor_total = 0;
        foreach ($_POST['produtos'] as $id_produto) {
            $quantidade = $_POST['quantidade'][$id_produto];

            // Consulta para pegar o valor unitário do produto
            $sql_produto = "SELECT valor FROM livro WHERE id = ?";
            $stmt = $mysqli->prepare($sql_produto);
            $stmt->bind_param("i", $id_produto);
            $stmt->execute();
            $stmt->bind_result($valor_unitario);
            $stmt->fetch();
            $stmt->close();

            // Calcula o subtotal para esse produto
            $subtotal = $quantidade * $valor_unitario;
            $valor_total += $subtotal;
        }

        // Inserir a compra na tabela 'compras'
        $dtcompra = date('Y-m-d H:i:s');  // Data atual da compra

        $sql_compra = "INSERT INTO compras (id_cliente, dtcompra, valortotal, metodo) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($sql_compra);
        $stmt->bind_param("isds", $id_cliente, $dtcompra, $valor_total, $metodo);
        $stmt->execute();
        $id_compra = $stmt->insert_id;  // Pega o ID da compra gerada
        $stmt->close();

        // Inserir os itens da compra na tabela 'itens_compra'
        foreach ($_POST['produtos'] as $id_produto) {
            $quantidade = $_POST['quantidade'][$id_produto];

            // Consulta para pegar o valor unitário do produto
            $sql_produto = "SELECT valor FROM livro WHERE id = ?";
            $stmt = $mysqli->prepare($sql_produto);
            $stmt->bind_param("i", $id_produto);
            $stmt->execute();
            $stmt->bind_result($valor_unitario);
            $stmt->fetch();
            $stmt->close();

            // Calcula o subtotal para esse item
            $subtotal = $quantidade * $valor_unitario;

            // Insere o item na tabela 'itens_compra'
            $sql_item = "INSERT INTO itens_compra (id_compra, id_produto, quantidade, valor_unitario, subtotal) 
                         VALUES (?, ?, ?, ?, ?)";
            $stmt = $mysqli->prepare($sql_item);
            $stmt->bind_param("iiidd", $id_compra, $id_produto, $quantidade, $valor_unitario, $subtotal);
            $stmt->execute();
            $stmt->close();
        }

        // Confirma a inserção e redireciona para uma página de confirmação ou carrinho
        echo "Compra realizada com sucesso! ID da compra: $id_compra";
        // Redireciona ou faz outra ação aqui, por exemplo:
        // header("Location: carrinho.php?compra_id=$id_compra");
        // exit;
    } else {
        echo "Nenhum produto selecionado!";
    }
} else {
    echo "Erro ao processar a compra.";
}

// Fecha a conexão
$mysqli->close();
