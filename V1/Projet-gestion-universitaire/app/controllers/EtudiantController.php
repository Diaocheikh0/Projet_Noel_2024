<?php

require_once('../app/models/Etudiant.php');

    function index(){
        $etudiant = getAll();
        require_once '../app/views/etudiants/index.php';
    }

    function remove(){
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=etudiant');
    }
    function pageAdd(){
        require_once '../app/views/etudiants/create.php';
    }

    function save(){
        $nom =$_POST['nom'];
        $prenom =$_POST['prenom'];
        $email =$_POST['email'];
        $filiere =$_POST['filiere'];
        add($nom,$prenom,$email,$filiere);
        header('location:index.php?controller=etudiant');
    }

    function edit() {
        $id = $_GET['id'];
        $etudiant = pg_fetch_assoc(getEtudiantById($id));
        require_once '../app/views/etudiants/edit.php';
    }

    function show() {
        $id = $_GET['id'];
        $etudiant = pg_fetch_assoc(getEtudiantById($id));
        require_once '../app/views/etudiants/show.php';
    }

    function updateEdit(){
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom= $_POST['prenom'];
        $email = $_POST['email'];
        $filiere = $_POST['filiere'];

        update($id, $nom, $prenom, $email, $filiere);
        header("Location: index.php?controller=etudiant");
    }
