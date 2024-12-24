<?php

require_once('../app/models/Cours.php');

    function index(){
        $cour = getAll();
        require_once '../app/views/cours/index.php';
    }

    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=cour');
    }
    function pageAdd(){
        require_once '../app/views/cours/create.php';
    }

    function save(){
        $nom_cours =$_POST['nom_cours'];
        $code_cours =$_POST['code_cours'];
        $nombre_heures =$_POST['nombre_heures'];
        add($nom_cours,$code_cours,$nombre_heures);
        header('location:index.php?controller=cour');
    }

    function edit() {
        $id = $_GET['id'];
        $cour = pg_fetch_assoc(getCourById($id));
        require_once '../app/views/cours/edit.php';
    }

    function show() {
        $id = $_GET['id'];
        $cour = pg_fetch_assoc(getCourById($id));
        require_once '../app/views/cours/show.php';
    }

    function updateEdit(){
        $id = $_POST['id'];
        $nom_cours = $_POST['nom_cours'];
        $code_cours= $_POST['code_cours'];
        $nombre_heures = $_POST['nombre_heures'];
        update($id, $nom_cours, $code_cours, $nombre_heures);
        header("Location: index.php?controller=cour");
    }
