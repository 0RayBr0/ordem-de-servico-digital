
<!DOCTYPE html>

<html>

<htm lang="pt-br">   
<head>
<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="Pagina.css" media="all" > 

<script type="text/javascript" src= "http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

<title> HOME DA MANUTENÇÃO </title>

<?php include("CentauroFuncoesJavaHome.php");?>

</head>

<body>
<form method="POST" action="gerarpdf.php" target="_blank">
	<form method="POST" action="OSC_PreCadastro.php">
<form method="POST" action="OSC_Mantenedor.php">
	<form method="POST" action="Cliente.php">
<form method="POST" action="OSC_CorpoCompletoTrancado.php">

<form method="POST" action="OSC_PreCadastroAtualizar.php"><div class ="header">

<a href = 'http://www2.centaurotelecom.com.br:8080/OSC/Home.php'><img class="  logo" src="./imagens/logo.png" height="61px" width="211px"></a>

<h1 ><center>HOME</center></h1>

<div id="link">
<a class="link" style=" color:#8B8989;  " href="http://www.centaurotelecom.com.br/contato/">www.centaurotelecom.com.br/contato </a>
<br><a class="link" style="color:#8B8989;"href="http://www.centaurotelecom.com.br/help-desk/">www.centaurotelecom.com.br/help-desk </a>
</div>
</div>

<div class="campohome">

<table class="Home">

<thead></thead>

<tbody>
	
<tr>
<td class="bordas_3"><label>Numero do chamado:</label><br></td>
<td><input type="text"  name="numero_chamado" id="numero_chamado"></td>


<td class="bordas_3"><label>Data de emissão:</label></td>
<td><input type="date" name="data_emissao" id="data_emissao"></td>

<td class="bordas_3"><label>Cliente:</label></td>
<td><input type="text" name="cliente"  id="cliente"></td>
</tr>

<tr>
<td class="bordas_3"><label>PRE ATENDIMENTO?</label><br></td>
<td><input type="text"  name="preatendimento" id="preatendimento"></td>

<td class="bordas_3"><label>MANTENEDOR ATENDEU?</label><br></td>
<td><input type="text"  name="atendido" id="atendido"></td>

<td class="bordas_3"><label>CLIENTE ACEITOU?</label><br></td>
<td><input type="text" name="autenticado_cliente" id="autenticado_cliente"></td>

</tr>

</tbody>

</table>
<center>

<button type="submit" formaction="/OSC/OSC_Precadastro.php">Pre Cadastro</button>
<button type="submit" formaction="/OSC/OSC_PreCadastroAtualizar">Atualizar Pre Cadastro</button>
    <button type="submit" formaction="/OSC/OSC_Mantenedor.php">Mantenedor</button>
   
     <button type="submit" formaction="/OSC/OSC_CompletaTrancada.php">OSC Completa</button>
     
<center><input  formaction="/OSC/gerarpdf.php"  class="botao_avaliação" type="submit" value="Gerar pdf" target="_blank"></center>

</center>
</div>

<center>
<div class="container">
<div id='signature-div'>
<script >

    //----------INÍCIO DAS VARIAVEIS----------//
    var key  = "cff2ae31-89c0-407f-8dc9-701274137bfa";
    var signer_disable_preview   = "0";
    var signer_email     = "raybretas@gmail.com";
    var signer_display_name   = "Rayanne Bretas de Melo"; //Opcional
    var signer_documentation  = ""; //Opcional
    var signer_birthday   = ""; //Opcional
    var signer_key_signer   = ""; //Opcional

    var host      = "https://secure.d4sign.com.br/embed/viewblob";
    var container     = "signature-div";
    var width       = '1025';
    var height       =  '500';
  
    //----------FIM DAS VARIAVEIS----------//

    var is_safari = navigator.userAgent.indexOf('Safari') > -1;
    var is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
    if ((is_chrome) && (is_safari)) {is_safari = false;}
    if (is_safari) {
        if (!document.cookie.match(/^(.*;)?\s*fixed\s*=\s*[^;]+(.*)?$/)) {
            document.cookie = 'fixed=fixed; expires=Tue, 19 Jan 2038 03:14:07 UTC; path=/';
            var url = document.URL;
            var str = window.location.search;
            var param = str.replace("?", "");
            if (url.indexOf("?")>-1){
                url = url.substr(0,url.indexOf("?"));
            }
            window.location.replace("https://secure.d4sign.com.br/embed/safari_fix?param="+param+'&r='+url);
        }
    }
    iframe = document.createElement("iframe");
    if (signer_key_signer === ''){
        iframe.setAttribute("src", host+'/'+key+'?email='+signer_email+'&display_name='+signer_display_name+'&documentation='+signer_documentation+'&birthday='+signer_birthday+'&disable_preview='+signer_disable_preview);
    }else{
        iframe.setAttribute("src", host+'/'+key+'?email='+signer_email+'&display_name='+signer_display_name+'&documentation='+signer_documentation+'&birthday='+signer_birthday+'&disable_preview='+signer_disable_preview+'&key_signer='+signer_key_signer);
    }
    iframe.setAttribute("id", 'd4signIframe');
    iframe.setAttribute("width", width);
    iframe.setAttribute("height", height);

    iframe.style.width = '50%';

    iframe.style.border = 0;
    iframe.setAttribute("allow", 'geolocation');
    var cont = document.getElementById(container);
    cont.appendChild(iframe);
    window.addEventListener("message", (event) => {
        if (event.data === "signed") {
            alert('ASSINADO');
        }
        if (event.data === "wrong-data") {
            alert('DADOS ERRADOS');
        }
    }, false);
    ////////////////////////////////////////CALLBACK FUNCTION//////////////////////////////////////////
    window.addEventListener("message", (event) => {
    if (event.data === "signed") {
        alert('ASSINADO'); //ou redirecionar o usuário para outra página.
    }
    if (event.data === "wrong-data") {
        alert('USUARIO CLICOU NO LINK: Meus dados estão errados.'); //ou redirecionar o usuário para uma página onde poderá alterar os seus dados.
    }
}, false);

</script>


</div></div></center>

</body>

</html>