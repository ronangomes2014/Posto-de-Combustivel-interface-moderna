<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-primary">
        <span class="navbar-brand mb-0 h1">Sistema de Relatórios</span>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="estoque.php">Voltar</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Relatório de Compras de Combustível</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Combustível</th>
                            <th>Quantidade Comprada (litros)</th>
                            <th>Data da Compra</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $compras = file("compras.csv");
                        $combustiveis = file("combustiveis.csv");

                        foreach ($compras as $compra) {
                            $dados_compra = explode(",", $compra);
                            $combustivel_id = $dados_compra[1];
                            $quantidade = $dados_compra[2];
                            $data = $dados_compra[3];

                            $combustivel_info = explode(",", $combustiveis[$combustivel_id]);
                            echo "<tr>";
                            echo "<td>" . $combustivel_info[1] . "</td>";
                            echo "<td>" . $quantidade . "</td>";
                            echo "<td>" . $data . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
