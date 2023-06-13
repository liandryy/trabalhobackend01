<?php
$server  = "localhost";
$banco   = "projeto2";
$usuario = "root";
$senha   = ""; 

function conectar($server,$banco,$usuario,$senha){
    try {
        $con = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    } catch (PDOException $e) {
        echo "Falha ao conectar: ".$e->getMessage();
        return null;
    }
}


function cadastrarPessoa($con2,$nome,$foto,$info,$dtCad){
     $sql = "INSERT INTO pessoa(nomePessoa,fotoPessoa,infoPessoa,dtCadPessoa) VALUES(?,?,?,?)"; 
     $consulta = $con2->prepare($sql);
     $consulta->bindValue(1,$nome);
     $consulta->bindValue(2,$foto);
     $consulta->bindValue(3,$info);
     $consulta->bindValue(4,$dtCad);
     $consulta->execute();
     $con2 = null;
}

function mostrarPessoas($con2){
    $sql = "SELECT * FROM pessoa ORDER BY dtCadPessoa DESC LIMIT 4";
    $consulta = $con2->prepare($sql);
    $consulta->execute();
    $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

function mostrarPessoasTabela($con2){
    $sql = "SELECT * FROM pessoa ORDER BY dtCadPessoa DESC";
    $consulta = $con2->prepare($sql);
    $consulta->execute();
    $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

function excluirPessoa($con,$id,$foto){
    $sql = "DELETE FROM pessoa WHERE idPessoa = ?";
    $consulta = $con2->prepare($sql);
    $consulta->bindValue(1,$id);
    $consulta->execute();
    unlink("arquivos/img/$foto");

}


function cadastrarPessoaEbook($con2,$idEbook,$nomeEbook,$nomePdfEbook,$capaEbook,$dtCadEbook){
     $sql = "INSERT INTO ebook(idEbook,nomeEbook,nomePdfEbook,capaEbook,dtCadEbook) VALUES(?,?,?,?,?)"; 
     $consulta = $con2->prepare($sql);
     $consulta->bindValue(1,$idEbook);
     $consulta->bindValue(2,$nomeEbook);
     $consulta->bindValue(3,$nomePdfEbook);
     $consulta->bindValue(4,$capaEbook);
     $consulta->bindValue(5,$dtCadEbook);
     $consulta->execute();
     $con2 = null;
}

function conectar($server,$banco,$usuario,$senha){
    try {
        $con = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    } catch (PDOException $e) {
        echo "Falha ao conectar: ".$e->getMessage();
        return null;
    }
}

function mostrarPessoasEbook($con2){
    $sql = "SELECT * FROM ebook ORDER BY dtCadEbook DESC LIMIT 5";
    $consulta = $con2->prepare($sql);
    $consulta->execute();
    $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

function mostrarPessoasTabelaEbook($con2){
    $sql = "SELECT * FROM ebook ORDER BY dtCadEbook DESC LIMIT 5";
    $consulta = $con2->prepare($sql);
    $consulta->execute();
    $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}

$con2 = conectar($server,$banco,$usuario,$senha);



?>