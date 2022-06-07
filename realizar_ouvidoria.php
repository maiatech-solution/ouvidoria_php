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

<h3>Ficha de solicitação</h3>

<section class="forms-ouvidoria container border mb-4 mt-4">
    <form method="post">
        <div class="row p-4">
            <div class="col-lg-12 col-md-12">
                <div class="form-group rounded-0">
                    <label for="assunto" class="form-label ">Assunto:</label>
                    <select id="assunto" name="assunto">
                        <option value="">Selecione...</option>
                        <option value="sugestao">Sugestões</option>
                        <option value="elogio">Elogio</option>
                        <option value="critica">Crítica ou Reclamação</option>
                        <option value="esclarecimento">Esclarecimento</option>
                        <option value="denuncias">Denúncias</option>
                        <option value="outras">Outras</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <label class="form-label" for="nome">Nome: <span class="text-danger">(*)</span> </label>
                    <input class="form-control" required type="text" name="nome" id="nome" placeholder="Informe seu nome completo">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="form-group">
                    <label class="form-label" for="cpf">CPF: <span class="text-danger">(*)</span></label>
                    <input class="form-control" required type="number" name="cpf" id="cpf" placeholder="___.___.___-__">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="form-group">
                    <label class="form-label" for="email">E-mail: <span class="text-danger">(*)</span></label>
                    <input class="form-control" required type="email" name="email" id="email" placeholder="Informe seu E-mail">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="form-group">
                    <label class="form-label" for="nasc">Data de nascimento:</label>
                    <input class="form-control" type="date" name="nasc" id="nasc">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div>
                    <div>
                        <label class="form-label" for="sex">Sexo:</label>
                    </div>
                    <div id="sex-input">
                        <input type="radio" name="sex" id="sexM" value="M" checked><span> Masculino</span>
                        <input type="radio" name="sex" id="sexF" value="F"><span> Feminino</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="form-group">
                    <label class="form-label" for="mensagem">Mensagem:  <span class="text-danger">(*)</span></label>
                    <textarea class="form-control" name="mensagem" id="mensagem"
                        style="max-width: 100%; min-width: 100%; min-height: 70px; max-height: 140px;" required></textarea>
                </div>
            </div>

        </div>
    </form>
    <button class="w-100 text-light btn btn-primary-pro rounded-0 mb-4" type="submit" onclick="enviar()">Enviar</button>
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