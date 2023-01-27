<?php
$nome = 'Caio';
$idade = 21;
$sexo = 'Masculino';
$email = 'caio@gmail.com';
$cpf = '111456147-99';
$usuario = 'EuCaio';
$senha = 321;

echo 'Bem vindo ao sistema! <br/><br/>';

if ($idade >= 18) {
    echo 'Cadastro realizado com sucesso! <br/>';

    echo 'Nome: ', $nome, '<br/>';
    echo 'Idade: ', $idade, '<br/>';
    echo 'Sexo: ', $sexo, '<br/>';
    echo 'E-mail: ', $email, '<br/>';
    echo 'CPF: ', $cpf, '<br/>';
    echo 'Usuário: ', $usuario, '<br/>';
    echo 'Senha: ', $senha;

}
else {
    echo 'Impossível cadastrar';
}
?>