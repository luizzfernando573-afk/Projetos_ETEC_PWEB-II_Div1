<?php
require '../controle/conexao.php';
$pdo = Conexao::conectar();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoria = strtoupper(filter_input(INPUT_POST, 'edtcategoria'));
    $sql = "insert into categorias (catnome)values(?);";
    $prp = $pdo->prepare($sql);
    $prp->execute([$categoria]);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <title>Cadastro de Categorias</title>
</head>

<body>
    <div class="container mt-3">
        <form action="" method="post">
            <div class="form-group">
                <label for="edtcategoria">Categoria</label>
                <input type="text" name="edtcategoria" id="edtcategoria" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-outline-primary mt-3">Gravar</button>
        </form>
    </div>
</body>

</html>