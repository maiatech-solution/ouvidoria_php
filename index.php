<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/estilos/estilo.css">
    <link rel="stylesheet" href="assets/estilos/estilo-bt.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;700&family=Odibee+Sans&family=Poppins:wght@300;400;500;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/bc9fb697b6.js" crossorigin="anonymous"></script>
    <title>Ouvidoria - FASPM</title>
</head>

<body class="bg-light">

    <?php
        @include('./assets/pages/cabecalho.php')
    ?>

    <section class="container mb-5 d-flex justify-content-around overflow-hidden">

        <div class="row w-100 d-flex justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card d-flex" style="width: 18rem;">
                    <img src="./assets/imgs/ouvidoria.jpg" class="card-img-top" alt="..." style="height: 150px;">
                    <div class="card-body mb-md-7">
                        <h5 class="card-title">Nova Demanda</h5>
                        <p class="card-text text-muted">Quando a demanda for relacionada a um serviço prestado pela
                            FASPM.</p>
                        <a href="nova_ouvidoria.php" class="btn btn-primary"><i
                                class="fa-solid fa-plus justify-content-center"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/imgs/pesquisa-ouvidoria.png" class="card-img-top" alt="..."
                        style="height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">Consultar Demanda</h5>
                        <p class="card-text text-muted">Possibilita visualizar informações sobre demanda anteriormente
                            cadastrada.</p>
                        <a href="consultar_ouvidoria.php" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex justify-content-center" id="card-auto-altura">
                <div class="card" style="width: 18rem;">
                    <img src="./assets/imgs/relatorios.png" class="card-img-top" alt="..." style="height: 150px;">
                    <div class="card-body">
                        <h5 class="card-title">Relatório Anual</h5>
                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="container mb-5 overflow-hidden">
        <div class="row border-blue_fas">

            <div class="col-12 d-flex flex-column justify-content-around w-100 text-center bg-blue_fas"
                style="height: 100px;">
                <h2 class="text-light">Canais de Atendimento</h2>
            </div>

            <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-around text-center "
                style="height: 200px;">

                <i class="fa-solid fa-phone icons-canais" style="font-size: 40px;"></i>
                <h3>Telefone</h3>
                <a title="CHAMADA DE VOZ" href="tel:(091)33230070" target="_blank" rel="noopener noreferrer">
                    <p class="text-canais">91 3323 0070</p>
                </a>

            </div>
            <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-around text-center "
                style="height: 200px;">

                <i class="fa-regular fa-envelope" style="font-size: 40px;"></i>
                <h3>E-mail</h3>
                <a title="ENVIAR E-MAIL" href="mailto:ouvidoria@faspmpa.com.br" target="_blank">
                    <p class="text-canais">ouvidoria@faspmpa.com.br</p>
                </a>

            </div>

            <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-around text-center "
                style="height: 200px;">

                <i class="fa-brands fa-whatsapp" style="font-size: 40px;"></i>
                <h3>Whatsapp</h3>
                <a href="https://wa.me/559133230072" target="_blank">
                    <p class="text-canais">(91) 3323 0072.</p>
                </a>

            </div>

            <div class="col-lg-3 col-md-6 d-flex flex-column justify-content-around text-center" style="height: 200px;">
                <i class="fa-solid fa-location-dot" style="font-size: 40px;"></i>
                <h3>Presencial</h3>
                <div>
                    <a href="https://www.google.com.br/maps/place/Tv.+Nove+de+Janeiro,+2600+-+Crema%C3%A7%C3%A3o,+Bel%C3%A9m+-+PA,+66065-155/@-1.4630796,-48.4775393,17z/data=!3m1!4b1!4m5!3m4!1s0x92a48dd4274c45e9:0x3b50626ef02cf4c4!8m2!3d-1.463085!4d-48.4753506"
                        target="_blank">
                        <span class="text-canais">Tv. 9 de janeiro, 2600, </span>
                        <span class="text-canais"> Cremação,Belém.</span>
                    </a>

                </div>
            </div>
        </div>
    </section>

    <section id="informacao" class="mb-5 container overflow-hidden">
        <p>
            Os dados ofertados têm por finalidade o atendimento das demandas e a geração de estatísticas sobre as
            atividades da Ouvidoria e serão tratados conforme a legislação aplicável – em especial:
        </p>

        <p>
            A Lei de Acesso à Informação (Lei nº 12.527/2011);
        </p>

        <p>
            A Lei de Proteção e Defesa do Usuário dos Serviços Públicos (Lei nº 13.460/2017);
        </p>

        <p>
            A Lei Geral de Proteção de Dados (Lei nº 13.709/2018).
        </p>
    </section>
    
    <?php
        @include('./assets/pages/footer.php')
    ?>

    <?php
        @include('./assets/pages/botao_para_topo.php')
    ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</html>