<?php
//$nome = $_GET['nome'];
//$nome = $_POST['nome']
$nome = '';
$periodo = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $periodo = $_POST['periodo'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Aplicação</title>
</head>
<body>
    <h1>
        <?php 
            if($periodo == 'm'){
                echo 'Bom dia <i>' . $nome . '</i>';
            }elseif($periodo == 't'){
                echo 'Boa Tarde' . $nome;
            }elseif($periodo == 't'){
                echo 'Boa Noite' . $nome;
            }
        ?>
    </h1>
    <?php if($periodo == 'm'): ?>
        Bom dia <i><?= $nome ?>!</i>
    <?php elseif ($periodo == 't'): ?>
        Boa Tarde <?= $nome?>!
    <?php elseif ($periodo == 'n'): ?>
        Boa Noite <?= $nome?>
        <?php endif; ?>
    <form action="/index.php" method="post">
        <label for="nome">Digite seu nome</label>
        <select name="periodo">
            <option value="m">Manhã</option>
            <option value="t">Tarde</option>
            <option value="n">Noite</option>
        </select> <br> <hr>
        <input type="text" name="nome" />
        <button type="submit">Enviar</button>
    </form>
</body>
</html>