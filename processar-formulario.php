<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <!-- Inclua o link para o seu arquivo CSS, se necessário -->
</head>
<body>
    <header>
        <!-- Conteúdo do cabeçalho -->
    </header>
    <div class="container">
        <h2>Lista de Clientes</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Whatsapp</th>
                    <th>Email</th>
                    <th>Data de Ativação</th>
                    <th>Data do Último Pagamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Certifique-se de que o arquivo clientes.txt existe no diretório data
                $clientes = file("data/clientes.txt", FILE_IGNORE_NEW_LINES);
                if ($clientes) {
                    foreach ($clientes as $cliente) {
                        $dados = explode(", ", $cliente);
                        echo "<tr>";
                        foreach ($dados as $dado) {
                            echo "<td>$dado</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>Nenhum cliente encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
