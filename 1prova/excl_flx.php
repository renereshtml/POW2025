<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <?php
    include 'conex.php';
    $id = $_GET['id'] ?? '';
    if ($id) {
        $sql = "DELETE FROM fluxo WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "Fluxo excluído com sucesso!";
        } else {
            echo "Erro ao excluir usuário: " . mysqli_error($conn);
        }
    } else {
        echo "ID inválido.";
    }
    mysqli_close($conn);
    ?>
    <div>
        <a href="listar_flx.php">Voltar para a lista de usuários</a>
    </div>
</body>
</html>