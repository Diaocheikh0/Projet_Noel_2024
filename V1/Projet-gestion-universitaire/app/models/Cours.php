<?php

require_once('../app/database.php');

    function getAll()
    {
        global $connexion;
        $sql = "SELECT * FROM cours";
        return pg_query($connexion, $sql);
    }

    function getCourById($id)
    {
        global $connexion;
        $sql = "SELECT * FROM cours WHERE id = $1";
        $result = pg_query_params($connexion, $sql, [$id]);
        return $result;
    }

    function delete($id)
    {
        global $connexion;
        $sql = "DELETE FROM cours WHERE id = $1";
        return pg_query_params($connexion, $sql, [$id]);
    }

    function add($nom_cours, $code_cours, $nombre_heures)
    {
        global $connexion;
        $sql = "INSERT INTO cours (nom_cours, code_cours, nombre_heures) values ($1, $2, $3)";
        return pg_query_params($connexion, $sql, [$nom_cours, $code_cours, $nombre_heures]);
    }

    function update($id, $nom_cours, $code_cours, $nombre_heures)
    {
        global $connexion;
        $sql = "UPDATE cours SET nom_cours = $1, code_cours = $2, nombre_heures = $3 WHERE id = $4";
        return pg_query_params($connexion, $sql, [$nom_cours, $code_cours, $nombre_heures, $id]);
    }





