
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
 <table class="Table1">
  <thead></thead>
  <tbody>
<tr>
 <td class="bordas_3"> <label>Numero do chamado:</label> <!-- tr:Linha  td:Coluna -->
 </td><td>                   
<input type="text"  name="numero_chamado" id="numero_chamado"  value="<?php
if (isset( $_POST['numero_chamado'])){

echo $_POST['numero_chamado'];}

?>" ><br></td>
<td class="bordas_3"><label> Solicitante: </label></td>
<td><input type="text" name="solicitantes" id="solicitantes" readonly="true"><br></td>

<td class="bordas_3"><label>Data de emissão: </label></td>
<td><input type="date" name="data_emissao" id="data_emissao" value="
  " readonly="true"><br></td>
</tr>

<tr>
<td class="bordas_3"><label>Cliente: </label></td>
<td><input type="text" name="cliente"  id="cliente"  readonly="true" ><br></td>

<td class="bordas_3"><label>Res.da Área: </label></td>
<td><input type="text" name="res_area" id="res_area"  readonly="true"><br></td>

<td class="bordas_3"><label>Localização/Área:</label></td>     
<td><input type="text" name="local" id="local"  readonly="true" ><br></td>

</tr>
<tr>
 <td class="bordas_3"><label>Mantenedores: </label></td>
<td><input type="texto" name="mantenedores" id="mantenedores"  readonly="true"><br></td>

<td class="bordas_3"><label>Resp. do Contrato: </label></td>
<td><input type="text" name="res_contrato" id="res_contrato"  readonly="true"><br></td>

<td class="bordas_3"><label>Centro de custo: </label></td>
<td><input type="text" name="centro_custo" id="centro_custo"  readonly="true" ><br></td>
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
                <input type="checkbox" id="dados" name="checkbox_DADOS"  value="1" onclick="return false;" >
               </td>


               <td class="bordas_3"> <label for="telefonia"> Telefonia </label></td><td>                
                <input type="checkbox" id="telefonia" name="checkbox_TEL"  value="1" onclick="return false;">
               </td>

               <td class="bordas_3"> <label for="circ_fechado_de_tv"> Circ. Fechado de TV (CFTV)</label></td><td>
               <input type="checkbox" id="circ_fechado_de_tv" name="checkbox_CFTV"  value="1" onclick="return false;">
               </td> 
                 
               <td class="bordas_3"> <label for="alerta_de_intrusao">Alerta de Intrusão (SAI) </label></td><td>
                <input type="checkbox" id="alerta_de_intrusao" name="checkbox_SAI"   value="1" onclick="return false;">
               </td>
            </tr>

            <tr>
               <td class="bordas_3"> <label for="wan"> WAN </label></td><td>
                <input type="checkbox" id="wan" name="checkbox_WAN"  value="1" onclick="return false;">                
               </td>
          
               <td class="bordas_3">  <label for="pabx"> PABX </label> </td><td>
                <input type="checkbox" id="pabx" name="checkbox_PABX" value="1" onclick="return false;">
               </td>

               <td class="bordas_3"> 
                <label for="circ_fechado_de_tv"> Controle de Acesso (SCA) </label></td><td>
                <input type="checkbox" id="controle_de_acesso" name="checkbox_SCA" value="1" onclick="return false;">
               </td>

               <td class="bordas_3"> <label for="audio_de_video"> Áudio e Vídeo (SON) </label></td><td>
                <input type="checkbox" id="audio_de_video" name="checkbox_SON" value="1" onclick="return false;"> 
               </td>
            </tr>

            <tr>
               <td class="bordas_3"> <label for="lan"> LAN </label></td><td>
                <input type="checkbox" id="lan" name="checkbox_LAN" value="1"> 
               </td>

               <td class="bordas_3"> <label for="equipamento"> Equipamento </label></td><td>
                <input type="checkbox" id="equipamento" name="checkbox_EQUIP" value="1" onclick="return false;">      
              </td>

               <td class="bordas_3"> <label for="deteccao_de_incendio"> Detecção de Incêndio (SDAI) </label></td><td> 
                <input type="checkbox" id="deteccao_de_incendio" name="checkbox_SDAI" value="1" onclick="return false;">    
               </td>

               <td class="bordas_3"> <label for="outros"> Outros </label></td><td>
                <input type="checkbox" id="outros" name="checkbox_OUTROS" value="1" onclick="return false;"></td>
            </tr>



</tbody>
</table>
</div>


<br>


<div class="campo3">
<table   class="Table3"  >
  <thead>
    <tr>
      <th class="borda3" colspan="7"> <h3>CONTROLE DE SERVIÇO</h3></th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tipo:</td>
<td> 
        <input type="radio" id="radio_CTRLSERVICE" name="radio_CTRLSERVICE" value="Contrato" onclick="javascript: return false;">
                    <label for="contrato_de_manutencao" > Contrato (Manutenção / LPU) </label>
                </td>
                <td > 
                  <input type="radio" id="radio_CTRLSERVICE" name="radio_CTRLSERVICE" value="Projeto" onclick="javascript: return false;">
                    <label for="projeto_de_engenharia"> Projeto de Engenharia </label>
                </td>

 <td colspan="4">Número:<input type="number" name="numero" id="numero" readonly="true"><br></td></td>
    </tr>
    <tr>
          <td  class="bordas_3"  colspan="3"><h3><label for="descricao"><u>Descrição do chamado:</u></label></h3></td>
          <td colspan="2" class="bordas "><h3>CARTÃO DE TEMPO</h3></td>
    </tr>
<tr>
  <td colspan="3" rowspan="6"><textarea rows="6" style="width: 25em" id="descricao" name="descricao" readonly="true"></textarea></td>
</tr>
<tr>
  <td class="bordas_2" ><label>Data de Abertura da O.S:</label></td><td><input type="date" name="data_de_abertura" id="data_de_abertura" readonly="true"></td>
</tr>
<tr>
  <td class="bordas"><label>Hora de Abertura da O.S:</label> </td><td><input type="time" name="hora_de_abertura" id="hora_de_abertura" readonly="true"></td>
</tr>
<tr>
  <td class="bordas_2"><label>Data de Fechamento da O.S:</label></td><td><input type="date" name="data_de_fechamento" id="data_de_fechamento" readonly="true"></td>
</tr>
<tr>
  <td class="bordas" ><label>Hora de Fechamento da O.S:</label></td><td><input type="time" name="hora_de_fechamento" id="hora_de_fechamento" readonly="true"></td>

</tr>
<td  colspan="2" class="bordas_3">Calculo do tempo de atendimento:</td>
<tr>
  <td class="bordas_3"><label><b> TAG do Equipamento:</b></label>
    <td><input  type="text" name="input_TAGEQUIP" id="input_TAGEQUIP" readonly="true" ></td>

  <td class="bordas_3"><label> <b>ITEM ou Sub Tag:</b> </label> </td><td ><input  type="text" name="input_ITEM" id="input_ITEM" readonly="true"></td>

  <td colspan="3"> <var type = "javascript" name="calculo_do_tempo" readonly="true">calculo</var> </td>

  
   </td>
</tr>
    
  </tbody>
</table>
</div>


<br>


  <div class="campo4">
<table  class="Table4">
  <thead>
    <tr>
      <th class="bordas" ><label for="causas_identificadas" ><h3> CAUSAS IDENTIFICADAS</h3></label></th>
      <th class="bordas"><label for="efeito"><h3> EFEITO</h3></label></th>
     </tr>
     <tbody>
       <tr>
        <td> <textarea rows="7" style="width: 30em"  id="causas_identificadas" name="causas_identificadas" readonly="true" ></textarea>  </td>

        <td>  <textarea rows="7" style="width: 30em" id="efeito" name="efeito" readonly="true"></textarea> </td>
        </tr>
     </tbody>
  </thead>
  
</table>    
  </div>


<br>


  <div class="campo5">
    <table class="Table5">
   <thead>
    <tr> 
      <th class="bordas"> <label for="acao_realizada" ><h3> AÇÃO REALIZADA</h3></label></th>
      <th class="bordas"><label for="cartao_de_material"> <h3> CARTÃO DE MATERIAL</h3> </label></th>
      <th class="bordas"><label for="qtd"> <h3> QDE.</h3></label></th>
    </tr>     
   </thead>
   <tbody>
     <tr>
       <td> <textarea rows="7" style="width: 20em" id="acao_realizada" name="acao_realizada" readonly="true"> </textarea> </td>

       <td> <textarea rows="7" style="width: 20em" id="cartao_de_material" name="cartao_de_material" readonly="true"> </textarea> </td>

       <td> <textarea rows="7" style="width: 20em" id="qtd" name="qtd" readonly="true"> </textarea> </td>
     </tr>
   </tbody>

    </table>
  </div>


<br>

  <div class="campo6">
    <table class="Table6"> 
      <thead>
        <tr>
          <th class="bordas" colspan="3"> <h3> STATUS DO CHAMADO</h3></th>
        </tr>
      </thead>
      <tbody>

        <tr class="bordas_2">
                    <td> <input type="radio" id="radio_STATUS_CHAMADO" name="radio_STATUS_CHAMADO" value="concluido" onclick="javascript: return false;">
                    <label for="_Concluido_"> Concluído</label></td>

                     <td> <input type="radio" id="radio_STATUS_CHAMADO" name="radio_STATUS_CHAMADO" value="suspenso_aguardando_cliente" onclick="javascript: return false;">
                    <label for="_Suspenso_aguardando_cliente"> Suspenso aguardando cliente(ou Terceiros)</label></td>

                     <td> <input type="radio" id="radio_STATUS_CHAMADO" name="radio_STATUS_CHAMADO" value="suspenso_aguardando_centauro" onclick="javascript: return false;">
                    <label for="_Suspenso_aguardando_centauro"> Suspenso aguardando Centauro (ou Fabricante)</label></td>
        </tr>
      </tbody>
      
    </table>
  </div>


<br>


  <div class="campo7">
    <table class="Table7">
      <thead>
        <tr>
          <th class="bordas" for="observacao" ><label for="observacao" ><h3>OBSERVAÇÃO</h3></label></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><textarea rows="10" style="width: 70em" id="observacao" name="observacao" readonly="true"> </textarea> </td>
        </tr>
      </tbody>
      
    </table>   
  </div>


<br>
</div>
<br>


</div>
