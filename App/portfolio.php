<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alth Development - Portfólio</title>
    <link rel="icon" href="Assets/img/favicon.ico" type="image/x-icon">
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="Assets/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="Assets/css/style.css" rel="stylesheet">
    <script src="Assets/js/modernizr.js"></script>
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
                <a href="../index.php" style="color: #393939; font-size: 19px;">ALTH DEVELOPMENT</a>
            </div>

            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
        </header>

        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">Navegação</li>

                <li><a href="../index.php">Inicio</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="servicos.php">Serviços</a></li>
                <li><a href="portfolio.php">Portfólio</a></li>
                <li><a href="contato.php">Contato</a></li>

                <li class="box-label">Redes Sociais</li>

                <li class="box-social"><a href="https://www.facebook.com/althdev"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="https://www.instagram.com/althdev/"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="https://twitter.com/althdev"><i class="ion-social-twitter"></i></a></li>
            </ul>
        </nav>

    </div>

    <div class="top-bar">
        <h1>portfólio</h1>
        <p><a href="index.php">Home</a> / Portfólio</p>
    </div>

    <div class="main-container portfolio-inner clearfix">
        <div class="portfolio-div">
            <div class="portfolio">

                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">Tudo</a></li>
                            <li><a href="" data-filter=".sites">Sites</a></li>
                            <li><a href="" data-filter=".sistemas">Sistemas</a></li>
                            <li><a href="" data-filter=".aplicativos">Aplicativos</a></li>
                            <li><a href="" data-filter=".lgpd">LGPD</a></li>
                            <li><a href="" data-filter=".bi">BI</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="no-padding portfolio_container clearfix">

                    <div class="col-md-4 col-sm-6  sites logo">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="Assets/img/portfolio/01.png" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Web Site</span>
                                        <em>Clique Aqui</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 lgpd graphics">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="Assets/img/portfolio/05.png" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>LGPD</span>
                                        <em>Clique Aqui</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
 
                    <div class="col-md-4 col-sm-12 aplicativos">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="Assets/img/portfolio/02.png" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Aplicativos</span>
                                        <em>Clique Aqui</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-6 sistemas ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="Assets/img/portfolio/03.png" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Sistemas</span>
                                        <em>Clique Aqui</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
 
                    <div class="col-md-4 col-sm-6 bi ads">
                        <a href="single-project.html" class="portfolio_item">
                            <img src="Assets/img/portfolio/04.jpeg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>BI</span>
                                        <em>Clique Aqui</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <p class="copyright">Alth Development &copy; <?php echo date('Y'); ?></p>
        </div>
    </footer>

    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>

    <script src="Assets/js/jquery-2.1.1.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/js/menu.js"></script>
    <script src="Assets/js/animated-headline.js"></script>
    <script src="Assets/js/isotope.pkgd.min.js"></script>
    <script src="Assets/js/custom.js"></script>

</body>

</html>