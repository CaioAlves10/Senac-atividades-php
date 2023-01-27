<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'form';

$connection = mysqli_connect($server, $user, $password, $database);

if ($connection) {

    # code...

    echo 'Conectado com sucesso';
} else {

    # code...

    echo 'Falha ao conectar';
}
?>