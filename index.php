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
    <h4>Formulário de Cadastro</h4>
        <form action="_inserir_produto.php" method ="POST"style="margin-top:20px;">
            <div class="form-group">
                <label >Nro Produto</label>
                <input type="number" class="form-control" name="nroproduto" placeholder="Insira o número do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label >Nome Produto</label>
                <input type="text" class="form-control" name="nomeproduto"  placeholder="Insira o nome do produto" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label >Categoria</label>
                <select class="form-control" name="categoria">
                    <option >Periféricos</option>
                    <option >Hardware</option>
                    <option >Software</option>
                    <option >Celulares</option>                 
                </select>
            </div>
            <div class="form-group">
                <label >Quantidade</label>
                <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade do produto"autocomplete="off"  required>
            </div>
            <div class="form-group">
                <label >Fornecedor</label>
                <select class="form-control" name="fornecedor">
                    <option >Fornecedor A</option>
                    <option >Fornecedor B</option>
                    <option >Fornecedor C</option>  

                </select>
            </div>
            <br>
            <div style="text-align: right;">
                <button type="submit" id="botao" class="btn btn-sm" >Cadastrar</button>
            </div>
        </form>
   </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>