<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href = 'https://www2.centaurotelecom.com.br:8081/OSC/Home.php'><img class="  logo" src="./imagens/logo.png" height="61px" width="211px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="https://www2.centaurotelecom.com.br:8081/OSC/Home.php">Home</a>
              <a class="nav-link" href="https://www2.centaurotelecom.com.br:8081/Preventiva/index">O.S.P Digital Prudential</a>
              <a class="nav-link" href="http://www2.centaurotelecom.com.br:8080/portal_sf/Portal.php">Portal de faturamento</a>
              <a class="nav-link" href="http://www2.centaurotelecom.com.br:8080/OSC/Cadastro_Cliente.php">Cadastrar Cliente</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
          </div>
        </div>
      </nav>
    <div class="container">
    <form method="POST" action="Processa_table_cliente.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Cliente</label>
      <input type="text" name="cliente" class="form-control" id="inputPassword4" placeholder="" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Solicitante</label>
      <input type="text" name="solicitante" class="form-control" id="inputPassword4" placeholder="" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Cargo</label>
      <input type="text" name="cargo" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCEP">Cell</label>
      <input type="number" name="cell" class="form-control" id="inputCEP">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Local/Àrea</label>
      <input type="text" name="local_area" class="form-control" id="inputEmail4">
    </div>
 
  <button type="submit"  class="btn btn-primary">Entrar</button>
</form>
</div>
</body>
</html>