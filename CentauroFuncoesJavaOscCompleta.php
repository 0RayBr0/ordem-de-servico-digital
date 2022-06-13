<script type='text/javascript'>// src="script/FileSaver.js">
//src="script/jspdf.js">
//src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js" > //<!-- src='js/jspdf.min.js'-->
  
  function salvaPDF() 
  {
    alert("ATÉ AQUI ESTÁ OK! save pdf");

    //Escolhendo campo para adicionar no nome do arquivo e define o nome do arquivo
    var campoa1 = "input[name='numero_chamado']";
    var campoa2 = "input[name='cliente']";
    var campoa3 = "input[name='numero']";
    var campoa4 = "input[name='data_emissao']";

    var campoa4aux = $(campoa4).val();

    var campoa4ano = campoa4aux[0] + campoa4aux[1] + campoa4aux[2] + campoa4aux[3];
    var campoa4mes = campoa4aux[5] + campoa4aux[6];
    var campoa4dia = campoa4aux[8] + campoa4aux[9];

    var nomearquivo = 'OS ' + $(campoa2).val() + ' - ' + campoa4ano + campoa4mes + ' - Dia ' + campoa4dia + ' - ' + $(numero_chamado).val() + ' - CE' + $(campoa3).val();
    
    //Define o diretório que irá salvar o arquivo e a extensão do arquivo
    var dir_do_arquivo = '.\\salvePDFs\\';
    var ext_arquivo = '.pdf';

    //Cria o nome do arquivo a ser salvo
    var nomearqcompleto = dir_do_arquivo + nomearquivo + ext_arquivo;

    var auxcss = '<link rel="stylesheet" type="text/css" href="cadastro.css" media="screen">';

    //Cria o PDF vazio e salva
    var doc = new jsPDF(); // ESSA PARETE NÃO ESTÁ FUNCIONANDO
    
    //var docPDF = $(document).val();
    //var conteudo = document.getElementById('campos').innerHTML;
    var conteudo = document.innerHTML;

    //var doc = fromHTML('<html><head><title>${nomearquivo}</title></head><body>' + conteudo + '</body></html>');
    doc.fromHTML('<html><head>' + auxcss + '<title>' + nomearquivo + '</title> </head><body>' + conteudo + '</body></html>');
    doc.save('div.pdf');//nomearqcompleto);
    
  }
</script>

<script type='text/javascript'>
  $(document).ready(function()
  {
    $("input[name='numero_chamado']").show(function()
    {
      var $var_CLI = $("input[name='cliente']");
      var $var_MANT = $("input[name='mantenedores']");
      var $var_SOL = $("input[name='solicitantes']");
      var $var_RESPA = $("input[name='res_area']");
      var $var_RESPC = $("input[name='res_contrato']");
      var $var_DATAE = $("input[name='data_emissao']");
      var $var_LOCAL = $("input[name='local']");
      var $var_CC = $("input[name='centro_custo']");
     
      var $var_DADOS = $("input[name='checkbox_DADOS']");
      var $var_TEL = $("input[name='checkbox_TEL']");
      var $var_CFTV = $("input[name='checkbox_CFTV']");
      var $var_SAI = $("input[name='checkbox_SAI']");
      var $var_WAN = $("input[name='checkbox_WAN']");
      var $var_PABX = $("input[name='checkbox_PABX']");
      var $var_SCA = $("input[name='checkbox_SCA']");
      var $var_SON = $("input[name='checkbox_SON']");
      var $var_LAN = $("input[name='checkbox_LAN']");
      var $var_EQUIP = $("input[name='checkbox_EQUIP']");
      var $var_SDAI = $("input[name='checkbox_SDAI']");
      var $var_OUTROS = $("input[name='checkbox_OUTROS']");

      var $var_CTRLSERV = "input[name='radio_CTRLSERVICE']";

      var $var_NUMNPROP = $("input[name='numero']");
      var $var_DESC = $("textarea[name='descricao']");

      var $var_TAGEQUIP = $("input[name='input_TAGEQUIP']");
      var $var_ITEM = $("input[name='input_ITEM']");

      var $var_DATA_ABERTURA = $("input[name='data_de_abertura']");
      var $var_HORA_ABERTURA = $("input[name='hora_de_abertura']");
      var $var_DATA_FECHAMENTO = $("input[name='data_de_fechamento']");
      var $var_HORA_FECHAMENTO = $("input[name='hora_de_fechamento']");

      var $var_CAUSAS_IDENTIFICADAS = $("textarea[name='causas_identificadas']");
      var $var_EFEITO = $("textarea[name='efeito']");
      var $var_ACAO_REALIZADA = $("textarea[name='acao_realizada']");
      var $var_CARTAO_MATERIAL = $("textarea[name='cartao_de_material']");
      var $var_QTD = $("textarea[name='qtd']");

      var $var_STATUS_CHAMADO = $("input[name='radio_STATUS_CHAMADO']");

      var $var_OBSERVACAO = $("textarea[name='observacao']");

      //Zerando radio button
      var $var_CTRLSERV = $("input[name='radio_CTRLSERVICE'][value='Contrato']");
      $var_CTRLSERV.attr('checked', false);

      var $var_CTRLSERV = $("input[name='radio_CTRLSERVICE'][value='Projeto']");
      $var_CTRLSERV.attr('checked', false);

      var $var_STATUS_CHAMADO = $("input[name='radio_STATUS_CHAMADO'][value='concluido']");
      $var_STATUS_CHAMADO.attr('checked', false);

      var $var_STATUS_CHAMADO = $("input[name='radio_STATUS_CHAMADO'][value='suspenso_aguardando_cliente']");
      $var_STATUS_CHAMADO.attr('checked', false);

      var $var_STATUS_CHAMADO = $("input[name='radio_STATUS_CHAMADO'][value='suspenso_aguardando_centauro']");
      $var_STATUS_CHAMADO.attr('checked', false);

      //estudar
      $.getJSON('autopreenOscCompleta.php', {numero_chamado: $(this).val()}, function(json)
      {       
        $var_CLI.val(json.cliente);
        $var_MANT.val(json.mantenedores); 
        $var_SOL.val(json.solicitantes); 
        $var_RESPA.val(json.res_area);
        $var_RESPC.val(json.res_contrato);
        $var_DATAE.val(json.data_emissao);
        $var_LOCAL.val(json.local);
        $var_CC.val(json.centro_custo);

        $var_DADOS.attr('checked', json.checkbox_DADOS);
        $var_TEL.attr('checked', json.checkbox_TEL);
        $var_CFTV.attr('checked', json.checkbox_CFTV);
        $var_SAI.attr('checked', json.checkbox_SAI);

        $var_WAN.attr('checked', json.checkbox_WAN);
        $var_PABX.attr('checked', json.checkbox_PABX);
        $var_SCA.attr('checked', json.checkbox_SCA);
        $var_SON.attr('checked', json.checkbox_SON);

        $var_LAN.attr('checked', json.checkbox_LAN);
        $var_EQUIP.attr('checked',json.checkbox_EQUIP);
        $var_SDAI.attr('checked', json.checkbox_SDAI);
        $var_OUTROS.attr('checked', json.checkbox_OUTROS);

        $var_CTRLSERV = $($var_CTRLSERV + '[value=' + json.radio_CTRLSERVICE + "]");
        $var_CTRLSERV.attr('checked', true);

        $var_NUMNPROP.val(json.numero);
        $var_DESC.val(json.descricao);

        $var_TAGEQUIP.val(json.input_TAGEQUIP);
        $var_ITEM.val(json.input_ITEM);
        
        $var_DATA_ABERTURA.val(json.data_de_abertura);
        $var_HORA_ABERTURA.val(json.hora_de_abertura);
        $var_DATA_FECHAMENTO.val(json.data_de_fechamento);
        $var_HORA_FECHAMENTO.val(json.hora_de_fechamento);

        $var_CAUSAS_IDENTIFICADAS.val(json.causas_identificadas);
        $var_EFEITO.val(json.efeito);
        $var_ACAO_REALIZADA.val(json.acao_realizada);
        $var_CARTAO_MATERIAL.val(json.cartao_de_material);
        $var_QTD.val(json.qtd);

        $var_STATUS_CHAMADO = $($var_STATUS_CHAMADO + '[value=' + json.radio_STATUS_CHAMADO + "]");
        $var_STATUS_CHAMADO.attr('checked', true);
        
        $var_OBSERVACAO.val(json.observacao);

      });
    });
  });
  //alert ("ATÉ AQUI ESTÁ OK!");  
</script>




