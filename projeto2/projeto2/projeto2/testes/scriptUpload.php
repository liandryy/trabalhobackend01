<?php
// $nome    = $_POST['nomeArq'];
// $desc    = $_POST['descArq'];
$arquivo = $_FILES['arquivo'];
// echo "$nome - $desc - $arquivo";
//pasta para salvar o arquivo enviado
$dir  = "arquivos/";
$tmp  = $arquivo['tmp_name'];
$nomeArqLocal =  $arquivo['name'];

echo "<h3>Nome original:".$arquivo['name']."</h3>";
echo "<h3>TMP:".$arquivo['tmp_name']."</h3>";
echo "<h3>Tipo:".$arquivo['type']."</h3>";

$up = move_uploaded_file($tmp,$dir.$nomeArqLocal);
if($up){
    echo "Upload realizado com sucesso!!";
}else{
    echo "falha ao enviar";
}









?>