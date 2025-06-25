<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'conex.php';
    $id = $_GET['id'] ?? '';
    if ($id) {
        $sql = "DELETE FROM usuario WHERE id = $id";
        if (mysqli_query($con, $sql)) {
            echo "Usuário excluído com sucesso!";
        } else {
            echo "Erro ao excluir usuário: " . mysqli_error($con);
        }
    } else {
        echo "ID inválido.";
    }
    mysqli_close($con);
    ?>
    <div>
        <a href="lstr.php">Voltar para a lista de usuários</a>
    </div>
</body>
</html>