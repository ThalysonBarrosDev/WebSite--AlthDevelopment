<?php

    if (isset($_POST['email']) && isset($_POST['telefone'])) {

        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $assunto = addslashes($_POST['assunto']);
        $mensagem = addslashes($_POST['mensagem']);

        date_default_timezone_set('America/Sao_Paulo');
        $hora = date("Y-m-d  #  H:i:s");

        $to = "thalysonbarrospereira2019@gmail.com";
        $subject = $assunto;
        $body = "Nome do Cliente: ".$nome. "\r\n".
        "\r\n".
        "E-mail do Cliente: ".$email. "\r\n". 
        "\r\n". 
        "Telefone do Cliente: ".$telefone. "\r\n". 
        "\r\n". 
        "O que o Cliente deseja: ". "\r\n".
        "\r\n".
        "Mensagem: ".$mensagem. "\r\n".
        "\r\n".
        "Hora: ".$hora. "\r\n".

        $header = "From:contatowebsite@althdevelopment.com.br"."\r\n".
        "X-Mailer:PHP/".phpversion();

        mail($to,$subject,$body,$header);

    }

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alth Development - Contato</title>
    <link rel="icon" href="../Assets/img/favicon.ico" type="image/x-icon">
    <link href="../Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../Assets/css/style.css" rel="stylesheet">
    <script src="../Assets/js/modernizr.js"></script>
    <meta http-equiv="refresh" content=5;url="https://althdevelopment.com">
</head>

<body>

    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <header class="box-header">
            <div class="box-logo">
                <a href="index.php" style="color: #393939; font-size: 19px;">ALTH DEVELOPMENT</a>
            </div>

            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
        </header>

        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">Navegação</li>

                <li><a href="index.php">Inicio</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="contato.php">Contato</a></li>

                <li class="box-label">Redes Sociais</li>

                <li class="box-social"><a href="https://www.facebook.com/althdev"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="https://www.instagram.com/althdev/"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="https://twitter.com/althdev"><i class="ion-social-twitter"></i></a></li>
            </ul>
        </nav>

    </div>

    <div class="top-bar">
        <h1>Contato</h1>
        <p><a href="index.php">Home</a> / Contato</p>
    </div>

    <div class="container main-container">
        <div class="col-md-12">
            <span>Contato enviado com sucesso!</span>
            <span>Em breve entraremos em contato com você.</span>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <p class="copyright">Alth Development &copy; <?php echo date('Y'); ?></p>
        </div>
    </footer>

    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>

    <script src="../Assets/js/jquery-2.1.1.js"></script>
    <script src="../Assets/js/bootstrap.min.js"></script>
    <script src="../Assets/js/menu.js"></script>
    <script src="../Assets/js/animated-headline.js"></script>
    <script src="../Assets/js/isotope.pkgd.min.js"></script>
    <script src="../Assets/js/custom.js"></script>

</body>

</html>