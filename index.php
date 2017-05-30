<?php
require_once(getcwd() . '/Client.php');
$client = new Client();
$client->registrarUsuario('perro', '123456', 'img/fotoUsuario/perro.jpg');