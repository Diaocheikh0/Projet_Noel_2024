<?php
class Database{
    private $serveur="localhost";
    private $port = "5432";
    private $user="postgres";
    private $pwd="PASSWORD";
    private $dbname="gestion_rendez_vous";

    function getConnexion(){
        try {
            $connexion = new PDO("pgsql:host=$this->serveur;dbname=$this->dbname", $this->user, $this->pwd);

            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connecté !';
            return $connexion;
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
}
