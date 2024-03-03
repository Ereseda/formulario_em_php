
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3552002ac3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="margin-top:40px; ">
    <div style="text-align:right">
       <a href="menu.php"  role="button" class="btn btn-sm btn-primary" >Voltar</a>
    </div>
        <h3>Lista de Usuários</h3>
        <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Nível</th>      
      <th scope="col">Ação</th>
    </tr>
  </thead>    
    <?php
        include 'conexao.php';
        $sql = "SELECT * FROM usuarios WHERE  status = 'Inativo'";
        $busca = mysqli_query($conexao, $sql);

        while($array = mysqli_fetch_array($busca)){
            $id_usuario = $array['id_usuario'];
            $nomeusuario = $array['nome_usuario'];
            $mail = $array['mail_usuario'];
            $nivel = $array['nivel_usuario'];            
        ?>
        <tr>
            <td><?php echo $nomeusuario ?></td>
            <td><?php echo $mail ?></td>
            <td><?php echo $nivel ?></td>        
            <td>
              <a class="btn btn-success btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel= <?php echo $nivel ?>"role= "button"><i class="fa fa-smile-beam"></i>&nbsp;Administrador</a>
              <a class="btn btn-warning btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel= 1" role="button"><i class="fa fa-smile-beam"></i>&nbsp;Funcionário</a>
              <a class="btn btn-dark btn-sm" style="color:#fff" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel= 2" role="button"><i class="fa fa-smile-beam"></i>&nbsp;Conferente</a>
              <a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_usuario.php?id=<?php echo $id_usuario ?> " role="button"><i class="fa fa-trash"></i>&nbsp;Excluir</a>
            </td>
        </tr>
      <?php } ?> 
    </table>   
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
>