
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3552002ac3.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="margin-top:40px; width: 500px">
    <div style="text-align:right">
       <a href="index.php"  role="button" class="btn btn-sm btn-primary" >Voltar</a>
    </div>

        <h3>Lista de Produtos</h3>
        <br>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Categoria</th>
      
      <th scope="col">Ação</th>
    </tr>
  </thead>    
    <?php
        include 'conexao.php';
        $sql = "SELECT * FROM `categoria`";
        $busca = mysqli_query($conexao, $sql);

        while($array = mysqli_fetch_array($busca)){
            $id_categoria = $array['id_categoria'];
            $nomecategoria = $array['nome_categoria'];
            
        ?>
        <tr>
            <td><?php echo $nomecategoria ?></td>
          
        
            <td><a class="btn btn-warning btn-sm" style="color:#fff" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa fa-edit"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" style="color:#fff" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="fa fa-trash"></i>&nbsp;Excluir</a>
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