<?php

class AnimalModel{
    function getAll(){
        global $entityManager;
        $animaux = $entityManager->getRepository(Animal::class)->findAll();
        return $animaux;
    }

    function getAnimalById($id){
        global $entityManager;
        $animal = $entityManager->getRepository(Animal::class)->find($id);
        return $animal;
    }

    function getAllEquipA(){
        global $entityManager;
        $equipments = $entityManager->getRepository(Equipment::class)->findAll();
        return $equipments;
    }

    function delete($id){
        global $entityManager;
        $animal = $entityManager->getRepository(Animal::class)->find($id);
        $entityManager->remove($animal);
        $entityManager->flush();
    }

    function add($type, $age, $sante, $equipment_id){
        global $entityManager;
        $equipment = $entityManager->getRepository(Equipment::class)->find($equipment_id);
        $animal = new Animal();
        $animal->setType($type);
        $animal->setAge($age);
        $animal->setSante($sante);
        $animal->setEquipment($equipment);
        $entityManager->persist($animal);
        $entityManager->flush();
    }

    function update($id, $type, $age, $sante, $equipment_id){
        global $entityManager;
        $equipment = $entityManager->getRepository(Equipment::class)->find($equipment_id);
        $animal = $entityManager->find(Animal::class, $id);
        $animal->setType($type);
        $animal->setAge($age);
        $animal->setSante($sante);
        $animal->setEquipment($equipment);
        $entityManager->persist($animal);
        $entityManager->flush();
    }
}