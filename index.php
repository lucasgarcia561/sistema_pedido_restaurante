<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/styleLogin.css">    
</head>
<body>
    <div class="container" id="tela_login">
    <h2>Login</h2>    
    <form id="form_login" action="login.php" method="POST">
        <?php if (isset($resultado) && $resultado["cod"] == 0): ?>
            <div class="alert alert-danger">
                <?php echo $resultado["msg"]; ?>
            </div>
        <?php endif; ?>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
        <br><br>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
        <br><br>
        <input class="button" type="submit" id="submeter" value="Entrar" class="btn btn-primary">
    </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>