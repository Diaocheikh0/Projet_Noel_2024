<?php
$serveur="localhost";
$port = "5432";
$user="postgres";
$pwd="PASSWORD";
$dbname="gestion_universitaire";

$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if(!$connexion){
    echo "Erreur de connexion";
}else{
    echo " Connecté !";
}
