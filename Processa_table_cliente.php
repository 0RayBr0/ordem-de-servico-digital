<?php
session_start();
include_once('conexao.php');
$numero_chamado = filter_input(INPUT_POST, 'numero_chamado',FILTER_SANITIZE_STRING);
$cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$solicitante = filter_input(INPUT_POST,'solicitante',FILTER_SANITIZE_STRING);
$cargo = filter_input(INPUT_POST,'cargo',FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
$cell = filter_input(INPUT_POST,'cell',FILTER_SANITIZE_STRING);
$local_area = filter_input(INPUT_POST,'local_area',FILTER_SANITIZE_STRING);

$sql_cabecalho = "INSERT INTO table_cliente VALUES ( 
    '$cliente',
    '$solicitante',
    '$cargo',
    '$email',
    '$cell',
    '$local_area'
);";

if(mysqli_query($conn, $sql_cabecalho)){

    echo "<script>alert('Dados salvos!'); window.location = 'Cadastro_Cliente.php'; </script>";
    $_SESSION['cliente'] = $cliente;
}

 else{
    echo "Erro ao salvar dados: ".$sql_cabecalho." <br>".mysqli_error($conn); 
}


mysqli_close($conn);
