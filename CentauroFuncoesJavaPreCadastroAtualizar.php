  <!-- script java para o autopreenchimento-->
<script type='text/javascript'>
  $(document).ready(function()
  {
    $("input[name='numero_chamado1']").show(function()
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

      //Zerando radio button
      var $var_CTRLSERV = $("input[name='radio_CTRLSERVICE'][value='Contrato']");
      $var_CTRLSERV.attr('checked', false);
      var $var_CTRLSERV = $("input[name='radio_CTRLSERVICE'][value='Projeto']");
      $var_CTRLSERV.attr('checked', false);
      
      //alert ("ATÉ AQUI ESTÁ OK!");
      $.getJSON('AutopreenPreCadastroAtualizar.php', {numero_chamado: $(this).val()}, function(json)
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
      });
    });
  });
  //alert ("ATÉ AQUI ESTÁ OK!");
  
</script>

