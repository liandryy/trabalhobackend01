<?php
include 'funcoesBD.php';

$nome  = $_POST['nome'];
$info  = $_POST['info'];
$foto  = $_FILES['arquivo'];
$dtCad = date("Y-m-d");

// echo $nome." - ".$info." - ".$foto['name'];
$nomeFoto = $foto['name'];
$tmpFoto  = $foto['tmp_name'];
$dir      = "arquivos/img/";
//recuperar a extensão do arquivo enviado
$ext = pathinfo($nomeFoto,PATHINFO_EXTENSION);
// echo $ext;
//extensão para img (jpg,jpeg,png,gif,jfif,webp)
$tiposFoto = array("jpg","jpeg","png","gif","jfif","webp");

$novoNome = "img-".uniqid().".".$ext;
// echo $novoNome;

if(in_array($ext,$tiposFoto)){   
    move_uploaded_file($tmpFoto,$dir.$novoNome);
    cadastrarPessoa($con2,$nome,$novoNome,$info,$dtCad);
    header("location:mostrarCadastros.php");
    echo "Upload ok";
}else{
    echo "Upload inválido";
}


?>