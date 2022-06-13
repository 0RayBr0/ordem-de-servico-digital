<?php
header('Accept: application/json; Content-Type: application/json ');

//Incluindo as funções da API da D4Sign
require_once( __DIR__ .'/vendor_d4/autoload.php');
use D4sign\Client;

//Criando variavel para conectar com a API
$acesso_token = "live_fee3d8bcb218c165b621f0afde70951ca84cd370ae6d1ec72a052fb3cf0c4ac8";//"live_6aeb31601118e8e4a45a0c435ce5b0673ea57f816d154d7598e85ffcc2eae2c2";
$cript_key = "live_crypt_LBzuLwdKjhBCCUqNnDL910gArAhU8yHp";//"live_crypt_EQgRtG66koV4JxQUqRBJciREnHBpqLE2";
$uuid_safe = "1c639280-73da-4a9f-95ff-fe60166ec838";
$host_d4sign = "https://secure.d4sign.com.br/api/v1/"; //Produção - A versão (v1) já está embutida na SDK
$host_d4signSandBox = 'https://sandbox.d4sign.com.br/api/'; //Desenvolvimento (SandBox)

//Criando variavel para usar o Template
//$name_template = "OSC - modelo - 2020-09-04 Token teste.docx"; 
$name_template = "OSC - modelo  teste 1 token.docx";
$id_template = "MTY1ODY";
$name_token = 'NumeroC';

//Criando variável para receber um documento específico
$id_documentoEspecifico = ""; //Para todos os documentos a variável deve ser vazia

//Cria variável que idenditifica o cofre
$id_cofre = '';

//Variavel para tratar a etapa do fluxo de assinatura
$etapa = 0;

//Documento local para enviar à D4Sign
//$end_doc = "C:\Users\Rayanne\Documents\OSC - modelo 2020-09-04.pdf";
$end_doc = "C:\Users\Rayanne\Documents\OSC - modelo 2020-09-04.pdf";
//Preprara para exibir as informações
echo "<pre>";

//Criar um objeto de conexão com a D4Sign
try{
  $client = new Client();
  //$client->setUrl($host_d4sign); 
  $client->setAccessToken($acesso_token);
  $client->setCryptKey($cript_key);
} 
catch(Exception $e) 
{
    echo $e->getMessage();
}
//-------------------------------Listar todos os cofres -----------------------------------
print_r("------------------------------Listar todos os cofres ------------------------------\n\n");
$safes = $client->safes->find();
print_r($safes);

//---------------------------Listar TODOS os documentos-------------------------------
// $docs = $client->documents->find($id_documentoEspecifico);
  print_r("----------------------------------Listar TODOS os documentos-----------------------\n\n");
 /* print_r($docs);
  print_r("------------ FIM DE: Todos os documentos\n\n");*/

//-----------------------Script para listar um documento específico---------------------
  print_r("------------------------------Listar um documento específico------------------------------\n\n");/*
$id_documentoEspecifico = "ca2bcc75-0c24-4375-8e07-aa88041ffbe5";
$docs = $client->documents->find($id_documentoEspecifico);
print_r($docs);
print_r("------------ FIM DE: Documento específico\n\n");*/

//-----------------Script para listar TODOS os documentos de um COFRE específico----------------
print_r("---------------------------------- Listar TODOS os documentos de um COFRE específico------------------------------\n\n");/*
$id_cofre = "1c639280-73da-4a9f-95ff-fe60166ec838";
$docs = $client->documents->safe($id_cofre);

print_r($docs);
print_r("------------ FIM DE: Todos os documentos do cofre específico\n\n");*/

//---------------------------------Script para Listar signatários de um documento------------------
print_r("--------------------------Listar signatários de um documento específico---------------------------\n\n");/*

$docs = $client->documents->listsignatures($id_documentoEspecifico);

print_r($docs);
print_r("------------ FIM DE: Lista dos signatários do documento específico\n\n");*/

//----------------------Script de TODOS os documentos em uma etapa de assinatura---------------------
print_r("----------------------------- Status do documento enviado para a assinatura ---------------------------\n\n");
/*$etapa = 4;
$docs = $client->documents->status($etapa);
print_r("As etapas de assinatura são: 
  1 - Processando
  2 - Aguardando Signatários
  3 - Aguardando Assinaturas
  4 - Finalizado
  5 - Arquivado
  6 - Cancelado \n\n");
print_r("------------ Todos os documentos que estão na etapa $etapa\n\n");
print_r($docs);
print_r("------------ FIM DE: Todos os documentos que estão na etapa $etapa\n\n");*/

//--------------------script enviar um documento (Upload)------------------------------------
print_r("-----------------------------Enviar um documento (upload)---------------------------\n\n");
/*$path_file = $end_doc;
$id_doc = $client->documents->upload($id_cofre, $path_file);
print_r("------------ Documento enviado para D4Sign\n\n");
print_r($id_doc);
print_r("\n\n------------ FIM DE: Documento enviado para D4Sign\n\n");
*/

//-------------------------------Script para cadastrar Signatários---------------------------------
print_r("-----------------------------Cadastrar Signatários---------------------------\n\n");
/*
$signers = array(
  array("email" => "raybretas@gmail.com", "act" => '1', "foreign" => '0', "certificadoicpbr" => '0', "assinatura_presencial" => '0', "embed_methodauth" => 'email', "embed_smsnumber" => '21996172555', "docauth" => '0'),
 // array("email" => "email2@dominio.com", "act" => '1', "foreign" => '0', "certificadoicpbr" => '0',"assinatura_presencial" => '0', "embed_methodauth" => 'sms', "embed_smsnumber" => '+5511953020202')
);
//embed_methodauth => 'sms''whats''email'
$return = $client->documents->createList($id_documentoEspecifico, $signers);
print_r("------------ Adicionando os signatários no documento\n\n");
print_r($return);
print_r("------------ FIM DE: Adicionando os signatários no documento\n\n");
*/
//-----------------------------Enviar um documento para assinatura-------------------------------------
print_r("-----------------------------Enviar um documento para assinatura---------------------------\n\n");
/*$message = 'Prezados, segue a O.S. para assinatura.';
$workflow = 0; //Todos podem assinar ao mesmo tempo
$skip_email = 1; //Não disparar email com link de assinatura (usando EMBED ou Assinatura Presencial)
$id_documentoEspecifico = $id_documentoEspecifico;
$doc = $client->documents->sendToSigner($id_documentoEspecifico, $message, $skip_email, $workflow);
print_r("------------ Documento específico enviado para assinatura (Optado no cod. não enviar e-mail)\n\n");
print_r($doc);
print_r("------------ FIM DE: Documento específico enviado para assinatura (Optado no cod. não enviar e-mail)\n\n");
*/
//------------------------------------Cancelar documento-----------------------------------------------
print_r("-----------------------------Resposta do cancelamento do documento---------------------------\n\n");/*
$docs = $client->documents->cancel($id_documentoEspecifico,'comentário sobre o cancelamento');
print_r($docs);
*/
//-----------------------------Script para listar todos os tamplates----------------------------
print_r("-----------------------------Listar todos os tamplates---------------------------\n\n");
/*$return = $client->templates->find();
print_r($return);
print_r("------------ FIM DE: Lista de templates");*/

//----------------------Criando um documento para assinatura apartir do template------------------

//include("conexao_apid4.php");
//----PREENCHENDO OS CAMPOS DO TEMPLATE
/*include("conexao.php");
$requisição= "SELECT * FROM table2_osc WHERE numero_chamado = '2110000001'LIMIT 1 ";
$resultado = mysqli_query($conn,$requisição);
$row_informacoes = mysqli_fetch_assoc($resultado);

if ($row_informacoes['dados'] == "1")$row_informacoes['dados'] = "X";
else $row_informacoes ['dados'] = "";
  
 if($row_informacoes['telefonia'] == '1') $row_informacoes ['telefonia'] = "X" ;
 else $row_informacoes ['telefonia'] = "";

 if($row_informacoes['circ_fechado_de_tv_CFTV'] == '1') $row_informacoes ['circ_fechado_de_tv_CFTV'] = "X" ;
 else $row_informacoes ['circ_fechado_de_tv_CFTV'] = "";

 if($row_informacoes['alerta_de_intrusao_SAI'] == '1') $row_informacoes ['alerta_de_intrusao_SAI'] = "X" ;
 else $row_informacoes ['alerta_de_intrusao_SAI'] = "";

 if($row_informacoes['wan'] == '1') $row_informacoes ['wan'] = "X" ;
 else $row_informacoes ['wan'] = "";

  if($row_informacoes['pabx'] == '1') $row_informacoes ['pabx'] = "X" ;
 else $row_informacoes ['pabx'] = "";

 if($row_informacoes['controle_de_acesso_SCA'] == '1') $row_informacoes ['controle_de_acesso_SCA'] = "X" ;
 else $row_informacoes ['controle_de_acesso_SCA'] = "";

 if($row_informacoes['audio_de_video'] == '1') $row_informacoes ['audio_de_video'] = "X" ;
 else $row_informacoes ['audio_de_video'] = "";

 if($row_informacoes['lan'] == '1') $row_informacoes ['lan'] = "X" ;
 else $row_informacoes ['lan'] = "";

 if($row_informacoes['equipamento'] == '1') $row_informacoes ['equipamento'] = "X" ;
 else $row_informacoes ['equipamento'] = "";


 if($row_informacoes['deteccao_de_incendio_SDI'] == '1') $row_informacoes ['deteccao_de_incendio_SDI'] = "X" ;
 else $row_informacoes ['deteccao_de_incendio_SDI'] = "";


 if($row_informacoes['outros'] == '1') $row_informacoes ['outros'] = "X" ;
 else $row_informacoes ['outros'] = "";

 $habilitar_radio = "";
$habilitar_radio2 = "";
if($row_informacoes['controle_de_servico'] == 'Contrato')$habilitar_radio = "x";
if($row_informacoes['controle_de_servico'] == 'Projeto')$habilitar_radio2 = "X";


$habilitar_radio3 = "";
$habilitar_radio4 = "";
$habilitar_radio5 = "";
if($row_informacoes['status_do_chamado'] == 'concluido')
  $habilitar_radio3 = "X";
if($row_informacoes['status_do_chamado'] == 'suspenso_aguardando_cliente')
  $habilitar_radio4 = "X";
if($row_informacoes['status_do_chamado'] == 'suspenso_aguardando_centauro')
  $habilitar_radio5 = "X";

///////////////////////////////////////////////////////

$templates = array(
       $id_template => array(
                'NumeroC' => $row_informacoes['numero_chamado'],
                'Solicitante' => $row_informacoes['solicitantes'],
                'DataEmissao' => $row_informacoes['data_de_emissao'],
                'Cliente' => $row_informacoes['cliente'],
                'ResArea' => $row_informacoes['res_area'],
                'LocalizaçãoArea' => $row_informacoes['local_area'],
                'Mantenedores' => $row_informacoes['mantenedores'],
                'RespContrato' => $row_informacoes['res_contrato'],
                'CentroCusto' => $row_informacoes['centro_de_custo'],
                'CheckboxA' => $row_informacoes ['dados'],
                'CheckboxB' => $row_informacoes['telefonia'],
                'CheckboxC' => $row_informacoes['circ_fechado_de_tv_CFTV'],
                'CheckboxD' => $row_informacoes['alerta_de_intrusao_SAI'],
                'CheckboxE' => $row_informacoes['wan'],
                'CheckboxF' => $row_informacoes['pabx'],
                'CheckboxG' => $row_informacoes['controle_de_acesso_SCA'],
                'CheckboxH' => $row_informacoes['audio_de_video'],
                'CheckboxI' => $row_informacoes['lan'],
                'CheckboxJ' => $row_informacoes['equipamento'],
                'CheckboxK' => $row_informacoes['deteccao_de_incendio_SDI'],
                'ChekboxK' => $row_informacoes['outros'],//alterar
                'CM' => $habilitar_radio,
                'PE' => $habilitar_radio2,
                'Numero' => $row_informacoes['numero'],
                'DescricaoChamado' => $row_informacoes['descricao_do_chamado'],
                'DataAbert' => $row_informacoes['data_abertura_osc'],
                'HoraAbert' => $row_informacoes['hora_abertura_osc'],
                'DataFech' => $row_informacoes['data_fechamento_osc'],
                'HoraFech' => $row_informacoes['hora_fechamento_osc'],
                'TagEquip' => $row_informacoes['tag_equip'],
                'ItemSubTag' => $row_informacoes['item'],
                'Efeito' => $row_informacoes['efeito'],
                'CausasIdent' => $row_informacoes['causas_identificadas'],
                'AcaoRealizada' => $row_informacoes['acao_realizada'],
                'CMaterial' => $row_informacoes['cartao_material'],
                'QTD' => $row_informacoes['qtd'],
                'Concluido' => $habilitar_radio3,
                'ACliente' => $habilitar_radio4,
                'ACent' => $habilitar_radio5,
                'Observacao' => $row_informacoes['observacao']
                // falta um token
                )
        );
$name_document = "Teste todos os Tokens 6.pdf"; 
$uuid_cofre = $uuid_safe; 
$uuid_pasta = ''; //root do cofre

$return = $client->documents->makedocumentbytemplateword($uuid_cofre, $name_document, $templates, $uuid_pasta);
print_r("------------ Documento para assinatura apartir do template/n/n");
print_r($return);
print_r("------------ FIM DE: Documento para assinatura apartir do template/n/n");*/

//--------------------------------------Script exibir saldo da conta---------------------------------
print_r("-------------------------------Saldo da conta -----------------------------------/n/n");
$return = $client->account->balance();
print_r($return);
?>
<!--////////////////////////////////////////EMBED////////////////////////////////////////////-->
<div id='signature-div'></div>
<script>
/*
    //----------INÍCIO DAS VARIAVEIS----------//
    var key       = $id_documentoEspecifico;
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
*/
</script>

 