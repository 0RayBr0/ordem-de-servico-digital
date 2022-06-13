<pre>
<?php

session_start();
include_once("Conexao.php");
$cliente = filter_input(INPUT_GET, 'cliente', FILTER_SANITIZE_STRING);
$buscasql = "SELECT cliente FROM table_cliente";
$resultado = mysqli_query($conn, $buscasql);

$array_clientes = array("Selecione");
$aux_array = array(" ");
$aux_array_tam = 0;
$j = 1;


for($aux_array_tam = 1; $rows = mysqli_fetch_assoc($resultado); $aux_array_tam++)
    $aux_array[$aux_array_tam] = $rows['cliente']; 

    //Reorganiza o array em ordem alfabetica
    sort($aux_array, SORT_NATURAL | SORT_FLAG_CASE);

for($i = 1; $i < $aux_array_tam; $i++)
{
    if($array_clientes[$j-1] == $aux_array[$i])
        $j--;
    else
        $array_clientes[$j] = $aux_array[$i]; //echo $j; echo " - "; echo $aux_array[$i]; echo "\n"; //Descomentar apenas para verificar o funcionamento do array  
    
    $j++;    
}


/*
#adicionando elementos
if(!empty($_SESSION['cliente']))
{
    $array_clientes [] = $_SESSION['cliente'];
}

print_r($array_clientes);

#excluir elemento
#unset($array_clientes[18]);
#print_r($array_clientes);

*/
?>
</pre>
 