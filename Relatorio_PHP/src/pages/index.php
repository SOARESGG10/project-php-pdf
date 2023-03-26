<?php include_once "../script/readFile.php" ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <title>Relatório | PHP</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <h2>Relatório Alunos</h2>
            </div>
            <table>
                <thead>
                    <?php foreach($colunas as $coluna) { ?>
                        
                        <td><b> <?php echo $coluna?> </b></td>
                    
                        <?php } ?>
                </thead>
                <tbody>
                <?php foreach($alunos as $aluno) { ?>
                    <tr>
                        <?php foreach ($aluno as $info) { ?>

                                <td> <?php echo $info?></td>

                        <?php } ?>
                        </tr>
                <?php } ?>
                </tbody>
            </table>
            <form action="../script/gerarPDF.php">
                <div class="container__input">
                    <input type="submit" value="Gerar Relatório">
                </div>
            </form>
    </div>
</body>
</html>