<?php
$id   = $_GET['id'];
$foto = $_GET['f'];

// echo "id: $id e foto: $foto";

excluirPessoa($con2,$id,$foto);
header('location?gerenciarPessoas.php');


?>