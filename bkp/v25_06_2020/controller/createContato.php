<?php
session_start();
include_once '../model/Contato.php';

$nome  = $_POST["inputNome"];
$email = $_POST["inputEmail"];
$texto = $_POST["inputTexto"];

if ($nome != NULL && $email != NULL && $texto != NULL) {
    $objContato = new Contato();

    $objContato->setNomePessoa($nome);
    $objContato->setEmailPessoa($email);
    $objContato->setTexto($texto);
    
    $objContato->enviarContato();
} else {
    $_SESSION['msgErro'] = 'Preencha todos os campos!';
    header('Location:../index.php');
    exit();
}
