
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3552002ac3.js" crossorigin="anonymous"></script>
    <title>Menu</title>
</head>
<body>
<div class="container" style="width: 400px;  margin-top: 40px">
    <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    <h4>Cadastro de Usuário</h4>
    <form action="_insert_usuario_externo.php" method="post">
        <div class="form-group">
            <label >Nome do Usuário</label>
            <input type="text" name="nommeusuario" class="form-control" required autocomplete="off" placeholder="Nome completo">
        </div>
        <div class="form-group">
            <label >E-mail</label>
            <input type="email" name="mailusuario" class="form-control" required autocomplete="off" placeholder="Seu E-mail">
        </div>
        <div class="form-group">
            <label >Senha do Usuário</label>
            <input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
        </div>
        <div class="form-group">
            <label >Repetir Senha</label>
            <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repetir senha" oninput="validaSenha(this)">
            <small>Precisa ser igual a senha digitada acima.</small>
        </div>
            <br>
            <div style="text-align:right">
                <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
            </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script>
function validaSenha (input){ 
	if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('Repita a senha corretamente');
  } else {
    input.setCustomValidity('');
  }
} 
</script>
</body>
</html>