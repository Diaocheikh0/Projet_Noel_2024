<?php
class RendezVousController {
    function index(){
        global $modelRV;
        $rendezvous = $modelRV->getAll();
        require_once '../app/views/rendezvous/index.php';
    }


    function remove(){
        global $modelRV;
        $id = $_GET['id'];
        $modelRV->delete($id);
        header('location:index.php?controller=rendezvous');
    }
    function pageAdd(){
        global $modelRV;
        $clients = $modelRV->getAllClientRv();
        require_once '../app/views/rendezvous/create.php';
    }

    function save(){
        global $modelRV;
        $date =$_POST['date'];
        $heure = $_POST['heure'];
        $description = $_POST['description'];
        $client_id = $_POST['client_id'];
        $modelRV->add($date, $heure, $description, $client_id);
        header('location:index.php?controller=rendezvous');
    }

    function edit() {
        global $modelRV;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $rendezvousEdit = $modelRV->getRendezvousById($id);
            $clients = $modelRV->getAllClientRv();

            if (!$rendezvousEdit) {
                header('Location: index.php');
                exit();
            }
            require_once '../app/views/rendezvous/edit.php';
        } else {
            header('Location: index.php?controller=rendezvous');
            exit();
        }
    }


    function updateEdit(){
        global $modelRV;
        $id = $_POST['id'];
        $date =$_POST['date'];
        $heure = $_POST['heure'];
        $description = $_POST['description'];
        $client_id = $_POST['client_id'];

        $modelRV->update($id, $date, $heure, $description, $client_id);
        header("Location: index.php?controller=rendezvous");
    }

    function show() {
        global $modelRV;
        $id = $_GET['id'];
        $rendez_vous = $modelRV->getRendezvousById($id);

        //  Récupérer l'ID du client lié au rendez-vous
        $client_id = $rendez_vous['client_id'];
        // Récupérer les informations du client
        $client = $modelRV->getClientdetailById($client_id);
        require_once '../app/views/rendezvous/show.php';
    }
}

