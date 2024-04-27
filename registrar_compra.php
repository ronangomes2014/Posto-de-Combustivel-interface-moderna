<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Compra de Combustível</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3 class="text-center">Registrar Compra de Combustível</h3>
                    </div>
                    <div class="card-body">
                        <form action="registrar_compra.php" method="post">
                            <div class="form-group">
                                <label for="combustivel_id">Combustível:</label>
                                <select id="combustivel_id" name="combustivel_id" class="form-control">
                                    <?php
                                    $handle = fopen("combustiveis.csv", "r");
                                    while (($data = fgetcsv($handle)) !== FALSE) {
                                        echo "<option value='" . $data[0] . "'>" . $data[1] . "</option>";
                                    }
                                    fclose($handle);
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantidade">Quantidade (litros):</label>
                                <input type="text" id="quantidade" name="quantidade" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Registrar Compra</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
