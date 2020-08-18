<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>:: SISCODE ::</title>
</head>

<body class="bg-light">

    <!-- Menu Superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0 fixed-top ">
        <div class="container mb-2">

            <a class="navbar-brand" href="#"><code id="code">{</code> <span id="icon"> siscode </span><code id="code">}</code></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#quemsomos">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projetos">Projetos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Carrossel de Imagens -->
        <div id="carouselExampleCaptions" class="carousel slide mt-4 carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/imagem1.jpg" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5-slide">Sistemas Web e Sites Responsivos</h5>
                        <p>Acesse seu sistema e site de qualquer dispositivo.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/imagem2.jpg" class="d-block w-100 " alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5-slide">Informações precisas e disponíveis</h5>
                        <p>Sistemas que fornecem informações precisas de forma simples.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/imagem3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="h5-slide">Tecnologia de ponta</h5>
                        <p>Trabalhamos com linguagens atuais e bancos de dados robustos.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Quem somos -->
        <div id="quemsomos" class="row p-3">
            <div class="col-md-12 col-ms-12 bg-info shadow text-white text-center py-2">
                <p class="h4">Quem Somos</p>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-title">
                        <h5 class="card-header text-center text-primary">Quem somos</h5>
                    </div>
                    <div class="card-body">
                        <p id="paragrafo" class="text-justify">Uma empresa de tecnologia, focada no desenvolvimento de Sistemas Web, Aplicativos para Dispositívos Móveis e Sites. Criada com a missão de desenvolver Sistemas com a finalidade de tornar o dia-a-dia na empresa mais simples e produtivo.</p>
                        <p id="paragrafo" class="text-justify">Observamos que pequenas e micro empresas utilizam a informática e seus softwares apenas para cumprir obrigações sejam elas tributárias ou governamentais. Com isso buscamos desenvolver aplicações simples, para que possam auxiliar esses Empresários nas suas tomadas de decisões.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card p-3 rounded-circle shadow">
                    <img id="img-quadro" src="img/img-quemsomos.jpg" class="rounded-circle">
                </div>

            </div>
        </div>

        <!-- Produtos -->
        <div id="produtos" class="row p-3 mt-3">
            <div class="col-md-12 col-ms-12 bg-info shadow text-white text-center py-2 ">
                <p class="h4">Produtos</p>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <img src="img/empresa-servicos.jpg" class="card-img-top img-thumbnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><code id="code">{</code> <span id="icon"> siscode </span><code id="code">}</code> - SGPE v1.0</h5>
                        <p id="paragrafo" class="text-justify">Sistema de Gestão e Planejamento Empresaria. Focado em apresentar informações simples e precisas para a gestão do seu negócio. Independente de ser micro ou pequena empresa. Desenvolvido para empresas do setor de produtos e serviços.</p>
                        <a href="sgpe.php" class="btn btn-primary btn-sm">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <img src="img/empresa-imobiliarias.png" class="card-img-top img-thumbnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><code id="code">{</code> <span id="icon"> siscode </span><code id="code">}</code> - SysImob v1.0</h5>
                        <p id="paragrafo" class="text-justify">Sistema para gestão de imobiliárias, conta com toda parte financeira, gestão de contratos, locação e venda. É parte integrante do sistema um App tanto para Android como IOS. Integrado ao sistema temos o site onde possibilita a consulta de imóveis.</p>
                        <a href="sysimob.php" class="btn btn-primary btn-sm">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card">
                    <img src="img/empresa-consultorios.jpg" class="card-img-top img-thumbnail" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><code id="code">{</code> <span id="icon"> siscode </span><code id="code">}</code> - SysClinica v1.0</h5>
                        <p id="paragrafo" class="text-justify">Agora ficou mais simples administrar agenda médica, gastos do consultório e/ou clínicas. Controlando também pagamentos e sempre focado na gestão. Acompanha App tanto para Android como IOS, onde pacientes podem marcar consulta via App.</p>
                        <a href="sgpe.php" class="btn btn-primary btn-sm">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projetos -->
        <div id="projetos" class="row p-3 mt-3">
            <div class="col-md-12 col-ms-12 bg-info shadow text-white text-center py-2 ">
                <p class="h4">Projetos</p>
            </div>

        </div>
        <div class="row mt-4">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-title">
                        <h5 class="card-header text-center text-primary">Projetos personalizados</h5>
                    </div>
                    <div class="card-body">
                        <p id="paragrafo" class="text-justify">Antenados as mais recentes e modernas tecnologias, temos a capacidade de desenvolver produtos sob demanda. Caso nenhum de nossos produtos atenda suas necessidades ou precise ser personalizados, pode contar conosco.</p>
                        <p id="paragrafo" class="text-justify">Buscando sempre resolver problemas para nossos clientes, elaboramos soluções tecnológicas, através de softwares ou App Mobile, que com certeza irão auxiliar sua empresa no dia-a-dia.</p>
                        <a href="sgpe.php" class="btn btn-primary btn-sm">Solicite um Orçamento</a>
                    </div>

                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card p-3 rounded-circle shadow">
                    <img id="img-quadro" src="img/projetos.jpg" class="rounded-circle">
                </div>

            </div>
        </div>

        <!-- Fale conosco / Solicite orçamento -->
        <div id="contato" class="row p-3 mt-3">
            <div class="col-md-12 col-ms-12 bg-info shadow text-white text-center py-2 ">
                <p class="h4">Fale conosco / Solicite orçamento</p>
            </div>

        </div>

        <div class="row mt-4 justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-title">
                        <h5 class="card-header text-center text-primary">Fale conosco / Solicite orçamento</h5>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="assunto">Assunto</label>
                                <input type="text" class="form-control" name="assunto" id="assunto" required>
                            </div>
                            <div class="form-group">
                                <label for="texto">Texto</label>
                                <textarea class="form-control" name="texto" id="texto" rows="5" required></textarea>
                            </div>
                            <button class="btn btn-primary btn-sm" type="submit">
                                <i class="far fa-envelope fa-lg mr-2"></i>
                                Enviar
                            </button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <code id="code">{</code> <span id="icon"> siscode </span><code id="code">}</code><br/>
                        <p class="card-text text-primary">
                            <i class="far fa-envelope fa-lg mr-2"></i>
                            thiagomaduro82@gmail.com
                        </p>
                        <p class="card-text text-primary">
                            <i class="fab fa-whatsapp fa-lg mr-2"></i>
                            (14)99691-1364
                        </p>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

    <!-- Footer -->
    <footer class="page-footer blue mt-4">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-2 bg-secondary">© 2020 Copyright:
            <strong><code id="code">{</code> <span id="icon"> siscode </span><code id="code">}</code></strong>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>