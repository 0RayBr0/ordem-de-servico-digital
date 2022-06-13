<!--
<script type="text/javascript" src= "http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>-->

<script type='text/javascript'>
  $(document).ready(function()
    {
      $("input[name='numero_chamado']").blur(function()
      {
        var $preatendimento = $("input[name='preatendimento']");
        var $atendido = $("input[name='atendido']");
        var $autenticado_cliente = $("input[name='autenticado_cliente']");

        var $var_CLI = $("input[name='cliente']");
        var $var_DATAE = $("input[name='data_emissao']");
  
        $.getJSON('AutopreenHome.php', {numero_chamado: $(this).val()}, function(json)
        {
          $preatendimento.val(json.preatendimento); 
          $atendido.val(json.atendido); 
          $autenticado_cliente.val(json.autenticado_cliente);
          $var_CLI.val(json.cliente);
          $var_DATAE.val(json.data_emissao);
        });
      });
    }
  );

</script>
