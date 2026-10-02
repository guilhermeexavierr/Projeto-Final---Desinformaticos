<?php
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.html");
    exit();
}

$nome = $_POST["nome"];
$email = $_POST["email"];
$produto = $_POST["produto"];
$quantidade = $_POST["quantidade"];
$endereco = $_POST["endereco"];
$pagamento = $_POST["pagamento"];

$erro = false;

if (empty($nome) || empty($email) || empty($endereco)) {
    $erro = true;
}

$dataHora = date("d/m/Y H:i:s");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Comprovante do Pedido</title>
</head>
<body>

    <header>
        <h1 class="logo">INFOR<span class="vermelho">MAL</span>TICOS</h1>
        <nav>
            <a class="links" href="index.html">Início</a>
            <a class="links" href="produtos.html">Produtos</a>
        </nav>
    </header>

    <main class="main-detalhes">
        <?php if ($erro) { ?>

            <section class="principal">
                <h2>Atenção</h2>
                <p>Preencha todos os campos obrigatórios.</p>
                <br>
                <a href="produtos.html" class="botao">Voltar</a>
            </section>

        <?php } else { ?>

            <section class="principal">
                <h2>Comprovante do Pedido</h2>
                <p>Pedido realizado com sucesso no servidor.</p>
            </section>

            <section class="box-formulario">
                <h2>Resumo da Compra</h2>
                <p><strong>Data e hora:</strong> <?php echo $dataHora; ?></p>
                <p><strong>Nome:</strong> <?php echo $nome; ?></p>
                <p><strong>E-mail:</strong> <?php echo $email; ?></p>
                <p><strong>Produto:</strong> <?php echo $produto; ?></p>
                <p><strong>Quantidade:</strong> <?php echo $quantidade; ?></p>
                <p><strong>Endereço:</strong> <?php echo $endereco; ?></p>
                <p><strong>Pagamento:</strong> <?php echo $pagamento; ?></p>
                <br>
                <a href="produtos.html" class="botao">Voltar aos Produtos</a>
            </section>

        <?php } ?>
    </main>

</body>
</html>