<!DOCTYPE html>

<html>

<htm lang="pt-br">

<head>

<!-- Nomeando a Página -->
<title>Pre Atendimento </title>

<!--<form method="POST" action="salva_numero_chamado.php">-->
<form method="POST" action="processa_tabela1.php">
<form method="POST" action="OSC_Mantenedor.php">

<meta charset="UTF-8"> <!--codificação de caracteres -->

<!-- O HTML recebe as informações do código escrito em cadastro.css em CSS -->
<link rel="stylesheet" type="text/css" href="Pagina.css" media="all"> 

<!-- Apontamento online da bibliotéca em jquery -->
<script type="text/javascript" src= "http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<?php include("CentauroFuncoesJavaPreCadastroAtualizar.php");?>
<?php ///include ("salva_numero_chamado.php");?>

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

<div id="campos">

  <div class="campo1">

<table class="Table0">
  <thead></thead>
  <tbody><tr> <td class="bordas_3"> <label> Atualizar numero do chamado:</label> <!-- tr:Linha  td:Coluna -->
 </td><td>                   
<input type="text"  name="numero_chamado" id="numero_chamado" required="true" value="<?php
if (isset( $_POST['numero_chamado'])){

echo $_POST['numero_chamado'];}

?>"  ><br></td></tr></tbody>
</table>

 <table class="Table1">
 
  <thead>
    <!--<tr><th></th></tr>-->
  </thead>

  <tbody>

<tr>
 <td class="bordas_3"> <label>Numero do chamado:</label> <!-- tr:Linha  td:Coluna -->
 </td><td>                   
<input type="text"  name="numero_chamado1" id="numero_chamado1"  value="<?php
if (isset( $_POST['numero_chamado'])){

echo $_POST['numero_chamado'] ;}

?>" readonly="true"  ><br></td>

<td class="bordas_3"><label> Solicitante: </label></td>
<td><input type="text"  name="solicitantes" id="solicitantes" ><br></td>

<td class="bordas_3"><label>Data de emissão: </label></td>
<td><input type="date" name="data_emissao" id="data_emissao"><br></td>
</tr>
<tr>
<td class="bordas_3"><label>Cliente: </label></td>
<td>
<select name="cliente" id="cliente" required="">
  <option value="">Selecione</option> 
  <option>ARX Investimentos</option>
  <option>Ball</option>
  <option>BNY Mellon</option>
  <option>Downtown</option>
  <option>BP Energy Brasil</option>
  <option>CGG Veritas</option>
  <option>CONIG</option>
  <option>Ed. Garagem Andradas</option>
  <option>FCC SA</option>
  <option>Guanabara Diesel</option>
  <option>Generali Seguros</option>
  <option>Lab. Merck</option>
  <option>Nouryon</option>
  <option>Prudential Seguros</option>
  <option>Park Shopping CG</option>
  <option>Subsea 7</option>
</select>
<br></td>

<td class="bordas_3"><label>Res.da Área: </label></td>
<td><input type="text" name="res_area" id="res_area" ><br></td>

<td class="bordas_3"><label>Localização/Área:</label></td>     
<td><input type="text" name="local" id="local" ><br></td>
</tr>
<tr>
 <td class="bordas_3"><label>Mantenedores: </label></td>
<td><input type="text" name="mantenedores" id="mantenedores"><br></td>

<td class="bordas_3"><label>Resp. do Contrato: </label></td>
<td><input type="text" name="res_contrato" id="res_contrato"><br></td>

<td class="bordas_3"><label>Centro de custo: </label></td>
<td><input type="text" name="centro_custo" id="centro_custo" ><br></td>
</tr>

</tbody>
</table>
</div>

<br>



 <div class="campo2">
 <table  class="Table2"> 
<thead>
  <tr>
<th colspan="8"> <h3>CATEGORIA DE ATENDIMENTO </h3></th> <!--colspan :mesclar coluna e rownspan:mesclar linha -->
</tr> 
  </thead>
<tbody> 
            <tr>
               <td class="bordas_3"> <label for="dados"> Dados </label> </td><td>            
                <input type="checkbox" id="dados" name="checkbox_DADOS" value="1">
               </td>


               <td class="bordas_3"> <label for="telefonia"> Telefonia </label></td><td>                
                <input type="checkbox" id="telefonia" name="checkbox_TEL" value="1">
               </td>

               <td class="bordas_3"> <label for="circ_fechado_de_tv"> Circ. Fechado de TV (CFTV)</label></td><td>
               <input type="checkbox" id="circ_fechado_de_tv" name="checkbox_CFTV" value="1">
               </td> 
                 
               <td class="bordas_3"> <label for="alerta_de_intrusao">Alerta de Intrusão (SAI) </label></td><td>
                <input type="checkbox" id="alerta_de_intrusao" name="checkbox_SAI" value="1">
               </td>
            </tr>

            <tr>
               <td class="bordas_3"> <label for="wan"> WAN </label></td><td>
                <input type="checkbox" id="wan" name="checkbox_WAN" value="1">                
               </td>
          
               <td class="bordas_3">  <label for="pabx"> PABX </label> </td><td>
                <input type="checkbox" id="pabx" name="checkbox_PABX" value="1">
               </td>

               <td class="bordas_3"> 
                <label for="circ_fechado_de_tv"> Controle de Acesso (SCA) </label></td><td>
                <input type="checkbox" id="controle_de_acesso" name="checkbox_SCA" value="1">
               </td>

               <td class="bordas_3"> <label for="audio_de_video"> Áudio e Vídeo (SON) </label></td><td>
                <input type="checkbox" id="audio_de_video" name="checkbox_SON" value="1"> 
               </td>
            </tr>

            <tr>
               <td class="bordas_3"> <label for="lan"> LAN </label></td><td>
                <input type="checkbox" id="lan" name="checkbox_LAN" value="1"> 
               </td>

               <td class="bordas_3"> <label for="equipamento"> Equipamento </label></td><td>
                <input type="checkbox" id="equipamento" name="checkbox_EQUIP" value="1">      
              </td>

               <td class="bordas_3"> <label for="deteccao_de_incendio"> Detecção de Incêndio (SDAI) </label></td><td> 
                <input type="checkbox" id="deteccao_de_incendio" name="checkbox_SDAI" value="1">    
               </td>

               <td class="bordas_3"> <label for="outros"> Outros </label></td><td>
                <input type="checkbox" id="outros" name="checkbox_OUTROS" value="1"></td>
            </tr>
</tbody>
</table>
</div>

<br>

<div class="campo3">
<table   class="Table3">
  <thead>
    <tr>
      <th class="borda3" colspan="6"> <h3>CONTROLE DE SERVIÇO</h3></th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tipo:</td>

      <td colspan="2"> 
        <input type="radio" id="radio_CTRLSERVICE" name="radio_CTRLSERVICE" value="Contrato">
          <label for="contrato_de_manutencao"> Contrato (Manutenção / LPU) </label>

        <input type="radio" id="radio_CTRLSERVICE" name="radio_CTRLSERVICE" value="Projeto">
          <label for="projeto_de_engenharia"> Projeto de Engenharia </label>
      </td> 

      <td>Número: <input type="number" name="numero" value="" id="numero"><br>
      </td>
    </tr>

    <tr>
      <td colspan="2" class="bordas_3"><h3><label for="descricao"><u>Descrição do chamado:</u></label></h3>
      </td>
      <td colspan="2"><textarea rows="8" style="width: 15cm;" id="descricao" name="descricao"></textarea>
      </td>
    </tr>

</tr>
  </tbody>

  <br>

<tbody>

  <td class="bordas_3"><label><b> TAG do Equipamento:</b></label>
  </td>  
  <td> <input  type="text" name="input_TAGEQUIP" id="input_TAGEQUIP">
  </td>
  <td class="bordas_3"><label> <b>ITEM ou Sub Tag:</b> </label> 
  </td>
  <td> <input  type="text" name="input_ITEM" id="input_ITEM">
  </td>
</tr>
  
  </tbody>
    
</table>

</div>

</form>

<center><button><a target="_self" rel="noopener" href='http://www2.centaurotelecom.com.br:8080/formulario2/home.php'>home</a> </button> 
<input type="submit" formaction="/formulario2/processa_tabela1.php" value="Cadastrar">
<button type="submit" formaction="/formulario2/OSC_Mantenedor.php">Mantenedor</button>
</center>

</div>

<br>

<!--<center><button>
  <a target="_self" rel="noopener" href='http://10.192.60.52:8080/formulario2/osc_tecnico.php'>MANTENEDOR</a> 
</center></button>-->
 
 
</body>
</html>
