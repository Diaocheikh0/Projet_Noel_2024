<?php

    require_once '../app/database.php';
    require_once '../app/models/Client.php';
    require_once '../app/models/RendezVous.php';
    require_once '../app/controllers/ClientController.php';
    require_once '../app/controllers/AdminController.php';
    require_once '../app/controllers/RendezVousController.php';

    $database = new Database();
    $connexion = $database->getConnexion();
    $modelC = new ClientModel();
    $modelRV = new RendezVousModel();


    if (isset($_GET["controller"])) {
        $controller = $_GET["controller"];
    } else {
        $controller = "defaultController";
    }

    if ($controller == "rendezvous") {
        $ctl = new RendezVousController($connexion);
    } elseif ($controller == "client") {
        $ctl = new ClientController($connexion);
    } else {
        $ctl = new AdminController($connexion);
    }


    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='add'){
            $ctl->pageAdd();
        }

        if($_GET['action']=='delete'){
            $ctl->remove();
        }
        if($_GET['action']=='save'){
            $ctl->save();
        }

        if($_GET['action']=='edit'){
            $ctl->edit();
        }

        if($_GET['action']=='updateEedit'){
            $ctl->updateEdit();
        }

        if ($_GET['action'] == 'show') {
            $ctl->show();
        }

    }else{
        $ctl->index();
    }


