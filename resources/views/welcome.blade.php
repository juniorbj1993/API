<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kero Ajuda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script type="text/javascript" src="<?php echo asset('js/bootstrap.min.js')?>"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
<div class="topo_background">
    <div class="row navbar_keroajuda">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">
                        <img src="img/logx.png" width="30" height="30" class="d-inline-block align-top" alt="">
                        Kero Ajuda
                    </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                            <!-- <a class="nav-item nav-link" href="#">Login <span class="sr-only">(current)</span></a> -->
                            <a class="nav-item nav-link" href="#">O que é o Kero Ajuda?</a>
                            <a class="nav-item nav-link" href="#">Quem Somos</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            
        </div>
    </div> 
</div>

<div class="row slide-row">
        <div class="col-6 login_registrar">

            <div class="row texto_login_registrar">
                <div class="col-12">
                    <h4>Login</h4>
                    <p>Já sou cadastrado.</p>
                    <a href="#" class="btn btn-primary">Logar</a>
                </div>
                <div class="col-12">_____________________</div>
                <div class="col-12">
                <h4>Registrar</h4>
                    <p>Quero me cadastrar.</p>
                    <a href="#" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>
           
        </div>
                
        <div class="col-6">
              
             <div class="slide_box">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/slides/slide1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/slides/slide2.png" alt="Second slide">
                    </div>
                    
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </div>        
        </div>
    
    </div>

<div class="background_meio">
    <div class="card text-center">
    <div class="card-body">
        <h5 class="card-title">Que tal ofertar serviços e ganhar dinheiro extra?</h5>
        <p class="card-text">Com o aplicativo do Kero Ajuda isso se torna possível, clique no link abaixo para saber mais.</p>
        <a href="#" class="btn btn-primary">Conhecer o <b>Kero Ajuda!</b></a>
    </div>
    </div>
</div>
<div class="background_fim">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">Necessitando de serviços de profissionais?</h5>
            <p class="card-text">Não perca tempo, baixe logo nosso APP na Play Store e encontre o profissional de forma simples e fácil sem sair de casa.</p>
            <a href="#" class="btn btn-primary">Baixar o APP Kero Ajuda!</a>
        </div>
        </div>
</div>
    
</body>
</html>