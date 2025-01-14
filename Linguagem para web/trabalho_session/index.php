<?php
include("service.php");
$util = new Service();

if ($_POST["session"] == "criar")  {
  $erro = $util->criarSession();
}

if ($_POST["session"] == "incrementar")  {
  $erro = $util->incrementarSession();
}

if ($_POST["session"] == "excluir")  {
  $erro = $util->excluirSession();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com sessão</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h1 class="text-center mb-4">Tabuada com SESSION</h1>

    <form action="#" method="post" class="text-center">
        <button type="submit" name="session" value="criar" class="btn btn-primary mx-2">Criar Sessão</button>
        <button type="submit" name="session" value="incrementar" class="btn btn-success mx-2">Incrementar Sessão</button>
        <button type="submit" name="session" value="excluir" class="btn btn-danger mx-2">Excluir Sessão</button>
    </form>

    <div class="mt-5">
        <h2 class="text-center">Session Tabuada:</h2>
        <div class="card mt-3">
            <div class="card-body">
                <?php
                $validar = $util->validarSession();
                if ($validar) {
                    session_start();
                    echo '<ul class="list-group">';
                    for ($x = 1; $x <= 10; $x++) {
                        $y = $_SESSION['numero'] * $x;
                        echo '<li class="list-group-item">' . $_SESSION['numero'] . ' x ' . $x . ' = ' . $y . '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo '<p class="text-danger">Sessão não criada ainda</p>';
                }
                ?>
            </div>
        </div>
    </div>

    <?php if (isset($erro)): ?>
        <div class="alert alert-info text-center mt-4">
            <?php echo $erro; ?>
        </div>
    <?php endif; ?>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
