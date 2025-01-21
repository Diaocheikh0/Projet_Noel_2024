<?php
class EquipmentController {
    function index() {
        global $twig;
        global $modelE;
        $equipments = $modelE->getAll();
        echo $twig->render('equipment/index.twig', ['equipments' => $equipments]);
    }

    function remove(){
        global $modelE;
        $id = $_GET['id'];
        $modelE->delete($id);
        header('location:index.php?controller=equipment');
    }

    function pageAdd(){
        global $twig;
        echo $twig->render('equipment/create.twig');
    }

    function save(){
        global $modelE;
        $nom = $_POST['nom'];
        $etat = $_POST['etat'];
        $disponibilite = $_POST['disponibilite'];
        $modelE->add($nom, $etat, $disponibilite);
        header('location:index.php?controller=equipment');
    }

    function edit(){
        global $twig;
        global $modelE;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $equipment = $modelE->getEquipmentById($id);

            if (!$equipment) {
                header('Location: index.php');
                exit();
            }
            echo $twig->render('equipment/edit.twig', ["equipment" => $equipment]);
        } else {
            header('Location: index.php?controller=equipment');
            exit();
        }

    }

    function updateEdit(){
        global $modelE;
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $etat = $_POST['etat'];
        $disponibilite = $_POST['disponibilite'];
        $modelE->update($id, $nom, $etat, $disponibilite);
        header('location:index.php?controller=equipment');

    }
}