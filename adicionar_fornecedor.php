<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--< src="https://kit.fontawesome.com/3552002ac3.js" crossorigin="anonymous"-->

    <style type="text/css">
        #botao{
            background-color: #FF1168;
            color:#ffffff;
        }
    
    </style>
</head>
<body>

<div class="container" style="margin-top:40px; width:500px">

<div style="text-align:right">
    <a href="index.php" role="button" class="btn- btn-sm btn-primary">Voltar</a>

</div>
    <h4>Cadastro de fornecedor</h4>
    <form action="_inserir_fornecedor.php" method="post">
        <label >Fornecedor</label>
    <div class="form-group">
    <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor." autocomplete="off">
    </div>
    <div style="text-align: right">
    <br>
    <button type="submit" id="botao" class="btn btn-sm">Cadastrar</button></div>    
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>