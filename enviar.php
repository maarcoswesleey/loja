<?php 

require_once('config.php');

$destinatario = $email;
$assunto = $nome_loja . ' - Email da Loja';

$mensagem = utf8_decode('Nome: '.$_POST['nome']. "\r\n"."\r\n" . 'Telefone: '.$_POST['telefone']. "\r\n"."\r\n" . 'Mensagem: ' . "\r\n"."\r\n" .$_POST['mensagem']);

$remetente = $_POST['email'];
$cabecalhos = "From: ".$remetente;


mail($destinatario, $assunto, $mensagem, $cabecalhos);

//echo 'Enviado com Sucesso!';
 
 ?>