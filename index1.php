<?php

include 'conexao.php';
include 'script/password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];


$sql = "SELECT mail_usuario ,senha_usuario FROM usuarios WHERE mail_usuario = '$usuario'";
$buscar = mysqli_query($conexao, $sql);

 $total = mysqli_num_rows($buscar);

while($array = mysqli_fetch_array($buscar)){
        $senha = $array['senha_usuario'];

       $senhadecodificada = sha1($senhausuario);


        if($total > 0){
            if ($senhadecodificada == $senha) {
                header('Location: menu.php');
            }else{
                header('Location: erro.php');
            }
        echo 'teste' ;#conferir senha
        }else{ 

        

        header('Location : erro.php');

        } 

}

?>