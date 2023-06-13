<?php
include 'funcoesBD.php';
$dados = mostrarPessoas($con2);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <h2 class="text-center p-4">Dados Cadastrados</h2>
    <section class="d-flex justify-content-center ">   

    <?php foreach($dados as $i) {  ?>   

    <div class="card mx-2" style="width: 18rem;">
        <img src="arquivos/img/<?= $i['fotoPessoa']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Nome: <?= $i['nomePessoa']?>  </h5>
            <p class="card-text">
                Informações adicionais: <?= $i['infoPessoa']?>
                <h6>Data Cadastro:
                     <?= date("d/m/Y",strtotime($i['dtCadPessoa'])) ?> </h6>
             </p>

            <a href="#" class="btn btn-primary">Ver todos</a>
        </div>
    </div>
    <?php } ?>
    </section>
</body>
</html>