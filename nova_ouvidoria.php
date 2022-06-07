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

    <section class="container mb-5 d-flex justify-content-around">

        <div class="row w-100 d-flex justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card d-flex" style="width: 30rem;">
                    <div class="card-body mb-md-7">
                        <h5 class="card-title border-fas pb-2">Sugestões</h5>
                        <p class="card-text text-muted">As demandas serão recebidas na forma de sugestão quando
                            apresentarem ideia ou proposta relativa ao aprimoramento dos serviços prestados pelo
                            Tribunal, bem como à prevenção, à correção de falhas e omissões durante a prestação desses
                            serviços.</p>
                        <a href="realizar_ouvidoria.php" class="btn btn-primary"><i class="fa-solid fa-plus justify-content-center"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title border-fas pb-2">Elogio</h5>
                        <p class="card-text text-muted">As demandas serão recebidas na forma de elogio quando
                            apresentarem apreço, reconhecimento ou satisfação decorrente de um serviço prestado.</p>
                        <a href="realizar_ouvidoria.php" class="btn btn-primary"><i class="fa-solid fa-plus justify-content-center"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title border-fas pb-2">Crítica ou Reclamação</h5>
                        <p class="card-text text-muted">As demandas serão recebidas na forma de crítica ou reclamação
                            quando expressarem insatisfação, desagrado ou protesto decorrente de um serviço prestado.
                        </p>
                        <a href="realizar_ouvidoria.php" class="btn btn-primary"><i class="fa-solid fa-plus justify-content-center"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title border-fas pb-2">Esclarecimento</h5>
                        <p class="card-text text-muted">As demandas serão recebidas na forma de esclarecimento quando
                            solicitarem explicação acerca de um serviço prestado pelo Tribunal ou sobre o seu
                            funcionamento.</p>
                        <a href="realizar_ouvidoria.php" class="btn btn-primary"><i class="fa-solid fa-plus justify-content-center"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title border-fas pb-2">Denúncias</h5>
                        <p class="card-text text-muted">As demandas serão recebidas na forma de denúncia quando
                            atenderem aos requisitos formais de admissibilidade previstos no Regimento Interno do
                            Tribunal ou no Regime Jurídico Único dos Servidores Públicos Civis da Administração Direta,
                            das Autarquias e das Fundações Públicas do Estado do Pará.</p>
                        <a href="realizar_ouvidoria.php" class="btn btn-primary"><i class="fa-solid fa-plus justify-content-center"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <h5 class="card-title border-fas pb-2">Outras</h5>
                        <p class="card-text text-muted">As demandas serão recebidas sob esta denominação quando não se
                            enquadrarem nas demais naturezas.</p>
                        <a href="realizar_ouvidoria.php" class="btn btn-primary"><i class="fa-solid fa-plus justify-content-center"></i></a>
                    </div>
                </div>
            </div>

        </div>


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