<?php

include 'funcoesBD.php';
$dados = mostrarPessoasTabelaEbook($con2);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Dados do Ebook</title>
     <style>
      .foto{
        width:13rem;/* */
        height:20rem;
        border-radius:2rem;
      }
     </style>
</head>
<body>
     <table class="table w-75 mx-auto table-striped text-center">
        <tr>

            <th>ID</th>
            <th>Nome:</th>
            <th>PDF:</th>
            <th>Capa do Ebook:</th>
            <th>Data do cadastro:</th>
            <th colspan="2">Opções</th>
    
        </tr>
    // foreach($dados as $i) ?>
        <tr>
            <td><?= $i['idEbook']?></td>
            <td><?= $i['nomeEbook']?></td>
            <td><?= $i['nomePdfEbook']?></td>
            <td><?= $i['dtCadEbook']?></td>
            <td> <img class="foto" src="arquivos/img/<?= $i['fotoPessoa']?>" alt=""></td>
            <td><a href="#">Editar</a></td>
            <td> <a href="scriptExcluirPessoa.php?id=<?= $i['idPessoa']?>&f=<?= $i['fotoPessoa']?>">Excluir</a></td>
          
        </tr>
       
     </table>
    
</body>
</html>