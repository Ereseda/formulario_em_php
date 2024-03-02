<?php

include 'conexao.php';
include  'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$mail = $_POST['mailusuario'];
$senha = $_POST['senhausuario'];
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';
$sql = "INSERT INTO usuarios(nome_usuario, mail_usuario, senha_usuario, nivel_usuario, status) values ('$nomeusuario', '$mail', sha1('$senha'), $nivel, '$status')";

$inserir = mysqli_query($conexao, $sql);
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3552002ac3.js" crossorigin="anonymous"></script>
    <div class="container" style="width:400px">
        <center>
        <h3>Usuário adicionado com Sucesso</h3>
        <div style="margin-top:10px">
        <a href="cadastro_usuario.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
        </div>   
        </center>
    </div>
