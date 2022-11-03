<?php
$host = "127.0.0.1";
$user = "root";
$psw = "";
$database = "shoes";

$cn = new mysqli($host, $user, $psw, $database);

if ($cn === false) {
    die("errore di connessione" . $cn->connect_error);
}
