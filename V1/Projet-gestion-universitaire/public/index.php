<?php

    if (isset($_GET["controller"])) {
        $controller = $_GET["controller"];
    } else {
        $controller = "defaultController";
    }

    if ($controller == "etudiant") {
        require_once '../app/controllers/EtudiantController.php';
    } elseif($controller == "cour"){
        require_once '../app/controllers/CoursController.php';
    }else{
        require_once '../app/controllers/adminController.php';
    }

    if (isset($_GET['action']) && !empty($_GET['action'])) {
        if ($_GET['action'] == 'add') {
            pageAdd();
        }

        if ($_GET['action'] == 'delete') {
            remove();
        }
        if ($_GET['action'] == 'save') {
            save();
        }

        if ($_GET['action'] == 'edit') {
            edit();
        }

        if ($_GET['action'] == 'updateEedit') {
            updateEdit();
        }

        if ($_GET['action'] == 'show') {
            show();
        }

    } else {
        index();
    }


