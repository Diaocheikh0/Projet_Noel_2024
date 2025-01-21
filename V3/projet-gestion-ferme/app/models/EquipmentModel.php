<?php
class EquipmentModel{
    function getAll(){
        global $entityManager;
        $equipments = $entityManager->getRepository(Equipment::class)->findAll();
        return $equipments;

    }

    function getEquipmentById($id){
        global $entityManager;
        $equipement = $entityManager->getRepository(Equipment::class)->find($id);
        return $equipement;
    }

    function delete($id){
        global $entityManager;
        $equipment = $entityManager->find(Equipment::class, $id);
        $entityManager->remove($equipment);
        $entityManager->flush();
    }

    function add($nom, $etat, $disponibilite){
        global $entityManager;
        $equipment = new Equipment();
        $equipment->setNom($nom);
        $equipment->setEtat($etat);
        $equipment->setDisponibilite($disponibilite);
        $entityManager->persist($equipment);
        $entityManager->flush();
    }

    function update($id, $nom, $etat, $disponibilite){
        global $entityManager;
        $equipment = $entityManager->getRepository(Equipment::class)->find($id);
        $equipment->setNom($nom);
        $equipment->setEtat($etat);
        $equipment->setDisponibilite($disponibilite);
        $entityManager->persist($equipment);
        $entityManager->flush();
    }
}
