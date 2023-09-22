<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter os dados do formulário
    $nome = $_POST["nome"];
    $whatsapp = $_POST["whatsapp"];
    $email = $_POST["email"];
    $dataAtivacao = $_POST["data-ativacao"];
    $dataPagamento = $_POST["data-pagamento"];

    // Formatar os dados em uma linha para salvar no arquivo
    $linha = "$nome, $whatsapp, $email, $dataAtivacao, $dataPagamento" . PHP_EOL;

    // Abrir o arquivo "clientes.txt" para escrita
    $arquivo = fopen("data/clientes.txt", "a"); // "a" para adicionar ao arquivo existente

    if ($arquivo) {
        // Escrever a linha no arquivo
        fwrite($arquivo, $linha);

        // Fechar o arquivo
        fclose($arquivo);

        // Redirecionar de volta para a página de adicionar cliente com uma mensagem de sucesso
        header("Location: adicionar-cliente.html?success=1");
        exit;
    } else {
        // Lidar com erros ao abrir o arquivo
        echo "Erro ao abrir o arquivo.";
    }
} else {
    // Lidar com solicitações que não sejam POST (ou seja, acesso direto a este script)
    echo "Acesso não autorizado.";
}
?>
