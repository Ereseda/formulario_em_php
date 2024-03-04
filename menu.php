<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3552002ac3.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php 
        session_start();
       //$_SESSION['usuario'];
       $usuario = $_SESSION['usuario'];

        if( ! isset( $_SESSION['usuario'])) {

         header ('Location:index.php');
       }

       include 'conexao.php';

       $sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' and status = 'Ativo'";
       
       $buscar = mysqli_query($conexao, $sql);
       $array = mysqli_fetch_array($buscar);
       $nivel = $array['nivel_usuario'];




    ?>
    <div class="container" style="margin-top:100px">
    <div class="row">
       <?php
        if(($nivel == 1) || $nivel == 2){

        
       ?>

        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Adicionar Produto</h5>
                <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
                <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
            </div>
            </div>
        </div>

        <?php } ?>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Lista de Produtos</h5>
                <p class="card-text">Visualizar, editar, e excluir os produtos.</p>
                <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
            </div>
            </div>
        </div>








        <div class="col-sm-6" style="margin-top: 20px">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Adicionar Categoria</h5>
                <p class="card-text">Opção para adicionar categoria de produtos.</p>
                <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6" style="margin-top: 20px">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Adicionar Fornecedor</h5>
                <p class="card-text">Opção para adicionar fornecedores.</p>
                <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Fornecedores</a>
            </div>
            </div>
        </div>

        
        <div class="col-sm-6" style="margin-top: 20px">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cadastrar Usuários</h5>
                <p class="card-text">Cadastrar Usuários</p>
                <a href="cadastro_usuario.php" class="btn btn-primary">Cadastrar Usuários</a>
            </div>
            </div>
        </div>





        <div class="col-sm-6" style="margin-top: 20px">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Aprovar Usuários</h5>
                <p class="card-text">Aprovar usuários cadastrados</p>
                <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar Usuários</a>
            </div>
            </div>
        </div>







    </div>    
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</body>
</html>