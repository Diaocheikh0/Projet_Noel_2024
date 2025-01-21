<?php
    require_once '../app/config/bootstrap.php';
    require_once '../app/models/Equipment.php';
    require_once '../app/models/Animal.php';
    require_once '../app/models/EquipmentModel.php';
    require_once '../app/models/AnimalModel.php';
    require_once '../app/controllers/EquipmentController.php';
    require_once '../app/controllers/AnimalController.php';
    require_once '../app/controllers/interfaceController.php';

    require_once '../vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader([
        '../app/views/',
        '../app/views/equipment/',
        '../app/views/animal/',
    ]);
    $twig = new \Twig\Environment($loader, []);

    $modelE = new EquipmentModel();
    $modelA = new AnimalModel();


    if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
    } else {
    $controller = "defaultController";
    }

    if ($controller == "equipment") {
    $ctl = new EquipmentController();
    }elseif ($controller == "animal") {
        $ctl = new AnimalController();
    }else{
            $ctl = new InterfaceController();
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

    }else{
    $ctl->index();
    }