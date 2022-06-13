<!DOCTYPE html>
<html>

<htm lang="pt-br">

<head >

<title class="	title"> Ordem de serviço </title>

<form method="POST" action="processa_tabela3.php">
	
<meta charset="UTF-8"> 

<link rel="stylesheet" type="text/css" href="Pagina.css" media="all" > 

<script type="text/javascript" src= "http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<?php include("CentauroFuncoesJavaCliente.php");?>	

</head>

<body>

<div class ="header">

<a href = 'http://www2.centaurotelecom.com.br:8080/OSC/Home.php'><img class="  logo" src="./imagens/logo.png" height="61px" width="211px"></a>

<h1 ><center>ORDEM DE SERVIÇOS</center></h1>

<div id="link">
<a class="link" style=" color:#8B8989;  " href="http://www.centaurotelecom.com.br/contato/">www.centaurotelecom.com.br/contato </a>
<br><a class="link" style="color:#8B8989;"href="http://www.centaurotelecom.com.br/help-desk/">www.centaurotelecom.com.br/help-desk </a>
</div>
</div>
<div  class="botao">
<center><input class="botao_avaliação" type="submit" value="Enviar Avaliação"></center>
</div>

<?php include_once("OSC_CorpoCliente.php")?>

<div id="botao" class="botao">
  
</div>
</body>
</html>



