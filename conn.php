<?php
// hostname
$nomehost = "localhost";  
// utente per la connessione a MySQL 
$nomeuser = "nome_user";
// password per l'autenticazione dell'utente
$password = "";
// nome del database
$dbname="gestionemerci";
// connessione tramite mysql_connect()
$connessione = mysql_connect($nomehost,$nomeuser,$password);
if (!$connessione)
    echo "Errore di connessione";
mysql_select_db ($dbname,$connessione)
    or die ("Errore nella selezione del db");
?>