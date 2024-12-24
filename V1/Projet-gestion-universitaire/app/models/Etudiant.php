<?php
require_once('../app/database.php');

    function getAll(){
        global $connexion;
        $sql ="SELECT * FROM etudiants";
        return pg_query($connexion, $sql);
    }

    function getEtudiantById($id) {
        global $connexion;
        $sql = "SELECT * FROM etudiants WHERE id = $1";
        $result = pg_query_params($connexion, $sql, [$id]);
        return $result;
    }

    function delete($id){
            global $connexion;
            $sql ="DELETE FROM etudiants WHERE id = $1";
            return pg_query_params($connexion, $sql, [$id]);
        }

    function add($nom, $prenom, $email, $filiere){
        global $connexion;
        $sql ="INSERT INTO etudiants (nom, prenom, email, filiere) values ($1, $2, $3, $4)";
        return pg_query_params($connexion, $sql, [$nom, $prenom, $email, $filiere]);
    }

    function update($id, $nom, $prenom, $email, $filiere){
        global $connexion;
        $sql = "UPDATE etudiants SET nom = $1, prenom = $2, email = $3, filiere = $4 WHERE id = $5";
        return pg_query_params($connexion, $sql, [$nom, $prenom, $email, $filiere, $id]);
    }





