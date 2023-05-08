<?php

include_once("conexao.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input (INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$telefone = filter_input (INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nascimento = filter_input (INPUT_POST, 'data_nasc', FILTER_UNSAFE_RAW);
$estado = filter_input (INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$cidade = filter_input (INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$nomedesaparecido = filter_input (INPUT_POST, 'nome_desap', FILTER_SANITIZE_STRING);
$nomemae = filter_input (INPUT_POST, 'nome_mae', FILTER_SANITIZE_STRING);
$nomepai = filter_input (INPUT_POST, 'nome_pai', FILTER_SANITIZE_STRING);
$sexo = filter_input (INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$caracfisica = filter_input (INPUT_POST, 'carac_fis', FILTER_SANITIZE_STRING);
$caracvest = filter_input (INPUT_POST, 'carac_vest', FILTER_SANITIZE_STRING);
$parentesco = filter_input (INPUT_POST, 'grau', FILTER_SANITIZE_STRING);
$nascimentodesap = filter_input (INPUT_POST, 'nasc_desap', FILTER_UNSAFE_RAW);
$desaparecimento = filter_input (INPUT_POST, 'data_desap', FILTER_UNSAFE_RAW);
$mensagem = filter_input (INPUT_POST, 'msg', FILTER_SANITIZE_STRING);
$imagem = filter_input (INPUT_POST, 'img-desap', FILTER_UNSAFE_RAW);


echo "Nome: $nome";

$result = "INSERT INTO registros (nome, cpf, telefone, email, nascimento, estado, cidade, nomedesap, maedesap, paidesap, sexo, cfisicas, cvestimenta, parentesco, nascdesap, desaparecimento, detalhes, imgdesap, dataregistro) VALUES ('$nome',$cpf, $telefone, '$email','$nascimento', '$estado', '$cidade', '$nomedesaparecido', '$nomemae', '$nomepai', '$sexo', '$caracfisica', '$caracvest', '$parentesco', '$nascimentodesap', '$desaparecimento', '$mensagem', '$imagem', NOW())";

$resultado = mysqli_query($conn, $result);
?>