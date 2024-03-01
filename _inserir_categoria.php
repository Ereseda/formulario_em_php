<?php
include 'conexao.php';

$categoria = $_POST['categoria'];

//$sql = "insert into (categoria) values('$categoria')";

$sql = "INSERT INTO categoria (categoria) VALUES ('$categoria')";
$inserir = mysqli_query($conexao, $sql);
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3552002ac3.js" crossorigin="anonymous"></script>
    <div class="container" style="width:400px">
        <center>
        <h3>Adicionado com Sucesso!!!</h3>
        <div style="margin-top:10px">
        <a href="adicionar_categoria.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
        </div>   
        </center>
    </div>
