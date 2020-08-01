<?php
include_once '../model/Contato.php';

//date_default_timezone_set('America/Sao_Paulo');

$lista = file_get_contents("php://input");

$dados = json_decode($lista, true);

$nome  = $dados["inputNome"];
$email = $dados["inputEmail"];
$texto = $dados["inputTexto"];
//$data = date('Y/m/d H:i:s');

if ($nome != NULL && $email != NULL && $texto != NULL) {
	$objContato = new Contato();

	$objContato->setNomePessoa($nome);
	$objContato->setEmailPessoa($email);
	$objContato->setTexto($texto);
	//$objContato->setData($data);

	$objContato->enviarContato();
}