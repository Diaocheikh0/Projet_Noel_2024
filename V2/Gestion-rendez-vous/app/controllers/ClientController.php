<?php
class ClientController {
    function index(){
        global $modelC;
        $clients = $modelC->getAll();
        require_once '../app/views/clients/index.php';
    }

    function remove(){
        global $modelC;
        $id = $_GET['id'];
        $modelC->delete($id);
        header('location:index.php?controller=client');
    }
    function pageAdd(){
        require_once '../app/views/clients/create.php';
    }

    function save(){
        global $modelC;
        $nom =$_POST['nom'];
        $prenom =$_POST['prenom'];
        $email =$_POST['email'];
        $telephone =$_POST['telephone'];
        $modelC->add($nom,$prenom,$email,$telephone);
        header('location:index.php?controller=client');
    }

    function edit() {
        global $modelC;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $client = $modelC->getClientById($id);

            if (!$client) {
                header('Location: index.php');
                exit();
            }
            require_once '../app/views/clients/edit.php';
        } else {
            header('Location: index.php?controller=client');
            exit();
        }
    }

    function updateEdit(){
        global $modelC;
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];

        $modelC->update($id, $nom, $prenom, $email, $telephone);
        header("Location: index.php?controller=client");
    }

    function show() {
        global $modelC;
        $id = $_GET['id'];
        $client = $modelC->getClientById($id);
        require_once '../app/views/clients/show.php';
    }
}
