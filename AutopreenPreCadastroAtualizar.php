<?php
 include_once("conexao.php"); 

function retorna($quero_buscar, $conexaoSQL)
{
  //criar a comando query para buscar os dados
  $comando_query = "SELECT 
    numero_chamado,
    cliente,
    mantenedores,
    solicitantes,
    res_area,
    res_contrato,
    data_de_emissao,
    local_area,
    centro_de_custo,
    dados,
    telefonia,
    circ_fechado_de_tv_CFTV,
    alerta_de_intrusao_SAI,
    wan,
    pabx,
    controle_de_acesso_SCA,
    audio_de_video,
    lan,
    equipamento,
    deteccao_de_incendio_SDI,
    outros,
    controle_de_servico,
    numero,
    descricao_do_chamado,
    tag_equip,
    item FROM table1_osc WHERE numero_chamado = $quero_buscar LIMIT 1;";

  /*echo "<script>alert('foi'); window.location = 'AutopreenPreCadastro.php'; </script>"; echo "foi";*/
    
  //executar a query
  $resultado_query = mysqli_query($conexaoSQL, $comando_query);

  //IF para identificar situação de não encontrar a informação
  if($resultado_query->num_rows)
  {
    //Retorna o numero da linha onde a Query (busca) encontrou os parametros de busca
    $row_do_que_foi_buscado = $resultado_query->num_rows;

    //Retorna um objeto com as colunas com o resultado da busca
    $row_informacoes = $resultado_query->fetch_assoc();
    //$valores['cliente'] = $row_informacoes['oi'];

    //Retorna os valores encontrados pela query nos campos das páginas
    $valores['cliente'] = $row_informacoes['cliente'];
    $valores['mantenedores'] = $row_informacoes['mantenedores'];
    $valores['solicitantes'] = $row_informacoes['solicitantes'];
    $valores['res_area'] = $row_informacoes['res_area'];
    $valores['res_contrato'] = $row_informacoes['res_contrato'];
    $valores['data_emissao'] = $row_informacoes['data_de_emissao'];
    $valores['local'] = $row_informacoes['local_area'];
    $valores['centro_custo'] = $row_informacoes['centro_de_custo'];

    if($row_informacoes['dados'] == '1') $valores['checkbox_DADOS'] = true; 
    else $valores['checkbox_DADOS'] = false;
    
    if($row_informacoes['telefonia'] == '1') $valores['checkbox_TEL'] = true; 
    else $valores['checkbox_TEL'] = false;
    
    if($row_informacoes['circ_fechado_de_tv_CFTV'] == '1') $valores['checkbox_CFTV'] = true;
    else $valores['checkbox_CFTV'] = false;
    
    if($row_informacoes['alerta_de_intrusao_SAI'] == '1') $valores['checkbox_SAI'] = true; 
    else $valores['checkbox_SAII'] = false;

    if($row_informacoes['wan'] == '1') $valores['checkbox_WAN'] = true; 
    else $valores['checkbox_WAN'] = false;
   
    if($row_informacoes['pabx'] == '1') $valores['checkbox_PABX'] = true; 
    else $valores['checkbox_PABX'] = false;
    
    if($row_informacoes['controle_de_acesso_SCA'] == '1') $valores['checkbox_SCA'] = true; 
    else $valores['checkbox_SCA'] = false;
   
    if($row_informacoes['audio_de_video'] == '1') $valores['checkbox_SON'] = true; 
    else $valores['checkbox_SON'] = false;
    
    if($row_informacoes['lan'] == '1') $valores['checkbox_LAN'] = true; 
    else $valores['checkbox_LAN'] = false;
    
    if($row_informacoes['equipamento'] == '1') $valores['checkbox_EQUIP'] = true; 
    else $valores['checkbox_EQUIP'] = false;
    
    if($row_informacoes['deteccao_de_incendio_SDI'] == '1') $valores['checkbox_SDAI'] = true;
    else $valores['checkbox_SDAI'] = false;
    
    if($row_informacoes['outros'] == '1') $valores['checkbox_OUTROS'] = true; 
    else $valores['checkbox_OUTROS'] = false;
    
    $valores['radio_CTRLSERVICE'] = $row_informacoes['controle_de_servico'];

    $valores['numero'] = $row_informacoes['numero'];
    $valores['descricao'] = $row_informacoes['descricao_do_chamado'];

    $valores['input_TAGEQUIP'] = $row_informacoes['tag_equip'];
    $valores['input_ITEM'] = $row_informacoes['item'];
  }
  else
  {
    //Informa que não há chamado com o numero de chamado informado numero de chamado 
    $valores['cliente'] = '';
    $valores['mantenedores'] = '';
    $valores['solicitantes'] = '';
    $valores['res_area'] = '';
    $valores['res_contrato'] = '';
    $valores['data_emissao'] = '';
    $valores['local'] = '';
    $valores['centro_custo'] = '';

    $valores['checkbox_DADOS'] = false;
    $valores['checkbox_TEL'] = false;
    $valores['checkbox_CFTV'] = false;
    $valores['checkbox_SAI'] = false;

    $valores['checkboxd_WAN'] = false;
    $valores['checkbox_PABX'] = false;
    $valores['checkbox_SCA'] = false;
    $valores['checkbox_SON'] = false;

    $valores['checkbox_LAN'] = false;
    $valores['checkbox_EQUIP'] = false;
    $valores['checkbox_SDAI'] = false;
    $valores['checkbox_OUTROS'] = false;

    $valores['radio_CTRLSERV'] = '';

    $valores['numero'] = '';
    $valores['descricao'] = '';

    $valores['input_TAGEQUIP'] = '';
    $valores['input_ITEM'] = '';
  }
  return json_encode($valores);
}

if(isset($_GET['numero_chamado']))  echo retorna($_GET['numero_chamado'], $conn);

?>
