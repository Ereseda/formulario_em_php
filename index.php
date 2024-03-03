<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3552002ac3.js" crossorigin="anonymous"></script>
    <style typle="text/css">
        #tamanho{
            width:350px;
            -webkit-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
            -moz-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
            box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
        }
    </style>
</head>
<body>
    <div class="container" id="tamanho" style="margin-top: 100px; border-radius:15px; border: 2px solid #f3f3f3">
    <div style="padding:10px">
    <center>
        <img src="imagem/cadeado.jpg" width="125px"  heigth="125px">
    </center>
 
        <form  action="index1.php" method="post">
            <div class="form-group">
                <label> Usuário:</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label> Senha:</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" autocomplete="off" required>
            </div>
      
        <br>
        <div style="text-align: right;">
        <button  type="submit" class="btn btn-sm btn-success">Entrar</button>
        </div>

        </form>
    </div>
    </div>
        <div style="margin-top: 10px;">
            <center>
                 <small>Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php">aqui</a></small>
            </center>
        </div>
   

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>