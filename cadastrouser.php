<?php
    session_start();
    if(isset($_POST['submit'])){
        include_once('config.php');

    
        $username = $_POST['username'];
        $usertag = $_POST['usertag'];
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        

        if(empty($username))
        {
            echo "Username vazio";
        } 
        else if (empty($usertag))
        {
            echo "Nome de usuário vazio.";
        } 
        else if (!empty($username) && !empty($usertag))
        {
            $query =  mysqli_query($conexao,"INSERT INTO usuarios(username,usertag,email,senha) VALUES('$username','$usertag','$email', '$senha')");
            header('Location:login.php');
        }
        session_unset();
        session_destroy();
    }
    
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <!--Icones-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        
    <!--Fontes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 
        
    <!--Favicon-->
    <link rel="shortcut icon" href="img/001padrao.png" type="image/x-icon">
    <script src="js/code.js" defer></script>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@0.9.295/build/spline-viewer.js"></script>
    <title>Cadastro de identidade</title>
</head>
<body class="bg-4 bg-image inter-font" onload="document.getElementById('reg_username').focus()" theme-dicender=default>
    
    <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle" style="width: 30%;">
                <div class="card bg-glass text-2 mb-3 text-center">
                    <div class="card-body">
                        <h1 class="mb-5 login oswald-font fw-400">Identidade</h1>
                        <form id="form-cadastro" action="cadastrouser.php" method='POST' autocomplete="off">
                            <div class="mb-3">
                                <input type="text" class="form-control bg-glass text-2 bs-0" id="reg_username" name="username" autocomplete="off" aria-describedby="emailHelp" placeholder="Usuário">
                                <p id="textEmail" class="mt-2"></p>
                            </div>
                            <div class="mb-3 parent">
                                <input type="text" class="form-control bg-glass text-2 bs-0" id="reg_usertag" name="usertag" autocomplete="off" aria-describedby="emailHelp" placeholder="Nome de usuário" style="padding-left: 2rem;">
                                <i class="bi-at fs-5" id="at"></i>
                                <p id="textEmail" class="mt-2"></p>
                            </div>
                            <div>
                                <p id="textSenha" class="mt-2 text-center"></p> 
                            </div>
                            <div>
                                <p id="textConfirmSenha" class="mt-2 text-center"></p> 
                            </div>
                            <div class="svg-a" name="twittericon">
                                <a href=""><i class="bi-twitter" style="font-size: xx-large;"></i></a>
                            </div>
                            <div class="svg-a" name="googleicon">
                                <a href=""><i class="bi-google" style="font-size: xx-large;"></i></a>
                            </div>
                            <div class=" mb-3">
                            <button type="submit" name="submit" id="cardBtn" class="btn btn-primary btn-glass w-100" onclick="cadastrar(document.getElementById('reg_email'));">Cadastrar</button>
                            </div>
                            <div class="mb-0">
                                <a href="#" class="text-2 fs-foot">Termos de uso</a>
                                <a href="#" class="text-2 fs-foot">Privacidade</a>
                                <a href="#" class="text-2 fs-foot">Fale conosco</a>
                            </div>
                        </form>
                    </div>
                  </div>
            </div>
    </div>
</body>
</html>