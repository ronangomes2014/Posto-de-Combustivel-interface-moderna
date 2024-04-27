<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-primary">
        <span class="navbar-brand mb-0 h1">Sistema de Controle de Estoque</span>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="logout.php">Sair</a>
            </li>
        </ul>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-4">Bem-vindo, <?php echo $_SESSION['nome']; ?></h2>
                <h3>Estoque de Combustível</h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Combustível</th>
                            <th>Quantidade</th>
                            <th>Preço (R$)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $handle = fopen("combustiveis.csv", "r");
                        while (($data = fgetcsv($handle)) !== FALSE) {
                            echo "<tr>";
                            echo "<td>" . $data[1] . "</td>";
                            echo "<td>" . $data[2] . "</td>";
                            echo "<td>" . $data[3] . "</td>";
                            echo "</tr>";
                        }
                        fclose($handle);
                        ?>
                    </tbody>
                </table>
                <a href="adicionar_preco_quantidade.php" class="btn btn-primary">Adicionar Preço e Quantidade de Combustível</a>
                <a href="registrar_compra.php" class="btn btn-primary">Registrar Compra de Combustível</a>
                <a href="relatorios.php" class="btn btn-primary">Gerar Relatórios</a>
            </div>
        </div>
    </div>
</body>
</html>
