<?php

include 'conexao.php';
     $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href=" css/bootstrap.css">

    <style type="text/css">
        #tamanhoContainer{
            width:500px;
        }

        #botao{
            background-color:#FF1168;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container" id="tamanhoContainer"style="margin-top:40px">
    <h4>Formulário de Edição</h4>
        <form action="_atualizar_categoria.php" method ="POST"style="margin-top:20px;">

            <?php
                $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
                $buscar = mysqli_query($conexao, $sql);
                while($array = mysqli_fetch_array($buscar)){

                    $id_categoria = $array['id_categoria'];
                    $nome_categoria = $array['nome_categoria'];
                 
            ?>
            
            <div class="form-group">
                <label >Nome Categoria</label>
                <input type="text" class="form-control" name="nomecategoria" value="<?php echo $nome_categoria ?>" >
                <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display:none" >
            </div>
           
           
            <br>
            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn-sm" >Atualizar</button>
            </div>
            <?php  } ?>
        </form>
   </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>