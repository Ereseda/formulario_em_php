<?php

include 'conexao.php';

$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql ="INSERT INTO `estoque`( `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";
$Inserir =  mysqli_query($conexao, $sql);
?>

<link rel="stylesheet" href=" css/bootstrap.css">

<div class="container" style="width: 500px; margin-top:20px">
<center>
    <h4>Produto adicionado com Sucesso!</h4>
</center>
    <div style="padding-top: 20px">
    <center>
    <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar Novo Item</a>
    </center>
        
    </div>
</div>