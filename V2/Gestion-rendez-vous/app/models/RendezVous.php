<?php
class rendezvousModel{
    function getAll(){
        global $connexion;
        $sql ="SELECT * FROM rendez_vous";
        return $connexion->query($sql)->fetchAll();
    }

    function getRendezvousById($id) {
        global $connexion;
        $sql = "SELECT * FROM rendez_vous WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
        return $smtp->fetch();
    }

    function getClientdetailById($id) {
        global $connexion;
        $sql = "SELECT * FROM clients WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
        return $smtp->fetch();
    }


    function getAllClientRv(){
        global $connexion;
        $sql = "SELECT * FROM clients";
        return $connexion->query($sql)->fetchAll();
    }


    function delete($id){
        global $connexion;
        $sql ="DELETE FROM rendez_vous WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
    }

    function add($date, $heure, $description, $client_id){
        global $connexion;
        $sql ="INSERT INTO rendez_vous (date, heure, description, client_id) values (?,?,?,?)";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$date, $heure, $description, $client_id]);
    }

    function update($id,$date, $heure, $description, $client_id){
        global $connexion;
        $sql ="UPDATE rendez_vous SET date = ?,heure = ?,description = ?,client_id = ? where id= ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$date, $heure, $description, $client_id, $id]);
    }
}






