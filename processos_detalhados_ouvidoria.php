<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/estilos/estilo.css">
  <link rel="stylesheet" href="assets/estilos/estilo-bt.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;700&family=Odibee+Sans&family=Poppins:wght@300;400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/bc9fb697b6.js" crossorigin="anonymous"></script>
  <title>Ouvidoria - FASPM</title>
</head>

<body class="bg-light">

  <?php
  @include('./assets/pages/cabecalho.php')
  ?>

  <h3>Processo Detalhado</h3>

  <div class="container mb-5">

    <table class="table">
      <thead>
        <tr>
          <th scope="col-2">Protocolo</th>
          <th scope="col-2">Nome</th>
          <th scope="col-2">E-mail</th>
          <th scope="col-2">Telefone</th>
          <th scope="col-2">Assunto</th>
          <th scope="col-2">Mensagem</th>
          <th scope="col-2">Status</th>
          <th scope="col-2">Data Registro</th>
          <th scope="col-2">Data atualização</th>
          <th scope="col-2">Parecer</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td id="proto">Teste0</td>
          <td id="nom">teste1</td>
          <td id="emai">teste2</td>
          <td id="tele">teste3</td>
          <td id="assun">Teste4</td>
          <td id="mensa">teste5</td>
          <td id="stat">Recebido</td>
          <td id="data-reg">teste7</td>
          <td id="ata-at">teste8</td>
          <td id="parec">Teste9</td>
        </tr>
      </tbody>
    </table>
  </div>



  <?php
  @include('./assets/pages/footer.php')
  ?>

  <?php
  @include('./assets/pages/botao_para_topo.php')
  ?>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="./assets/scripts/script_nova_ouvidoria.js"></script>

</html>