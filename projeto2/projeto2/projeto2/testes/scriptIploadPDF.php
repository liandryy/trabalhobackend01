<?php
$titulo = $_POST['titulo'];
$ebook  = $_FILES['arquivo'];

$tmp       = $ebook['tmp_name'];
$nomeEbook = $ebook['name'];
$dir       = "arquivos/pdfs/";

//verificar a extensão do arquivo
$ext =  pathinfo($ebook['name'],PATHINFO_EXTENSION);

//docx(word)

if($ext=='pdf' or $ext=='docx'){
    echo "Upload permitido!!!!";
    move_uploaded_file($tmp,$dir.$nomeEbook);
}else{
    echo "Upload Negado!!!";
}



?>