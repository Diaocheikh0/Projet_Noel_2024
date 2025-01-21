<?php

class AnimalController{

    function index(){
        global $twig;
        global $modelA;
        $animaux = $modelA->getAll();
        echo $twig->render('animal/index.twig', ['animaux' => $animaux]);
    }

    function remove(){
        global $modelA;
        $id = $_GET['id'];
        $modelA->delete($id);
        header('location:index.php?controller=animal');
    }

    function pageAdd(){
        global $twig;
        global $modelA;
        $equipments = $modelA->getAllEquipA();
        echo $twig->render('animal/create.twig', ['equipments' => $equipments]);
    }

    function save(){
        global $modelA;
        $type = $_POST['type'];
        $age = $_POST['age'];
        $sante = $_POST['sante'];
        $equipment_id = $_POST['equipment_id'];
        $modelA->add($type, $age, $sante, $equipment_id);
        header('location:index.php?controller=animal');
    }

    function edit() {
        global $twig;
        global $modelA;
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            $animal= $modelA->getAnimalById($id);
            $equipments = $modelA->getAllEquipA();

            if (!$animal) {
                header('Location: index.php');
                exit();
            }
            echo $twig->render('animal/edit.twig', ['animal' => $animal, 'equipments' => $equipments]);
        } else {
            header('Location: index.php?controller=animal');
            exit();
        }
    }

    function updateEdit(){
        global $modelA;
        $id = $_POST['id'];
        $type = $_POST['type'];
        $age = $_POST['age'];
        $sante = $_POST['sante'];
        $equipment_id = $_POST['equipment_id'];
        $modelA->update($id, $type, $age, $sante, $equipment_id);
        header('location:index.php?controller=animal');

    }
}