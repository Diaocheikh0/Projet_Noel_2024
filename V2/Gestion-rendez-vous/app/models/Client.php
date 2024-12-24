<?php
class ClientModel{

    function getAll(){
        global $connexion;
        $sql ="SELECT * FROM clients";
        return $connexion->query($sql)->fetchAll();
    }

    function getClientById($id) {
        global $connexion;
        $sql = "SELECT * FROM clients WHERE id = ?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
        return $smtp->fetch();
    }
    function delete($id){
        global $connexion;
        $sql ="DELETE FROM clients WHERE id =?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$id]);
    }

    function add($nom, $prenom, $email, $telephone){
        global $connexion;
        $sql ="INSERT INTO clients (nom, prenom, email, telephone) values (?, ?, ?, ?)";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$nom, $prenom, $email, $telephone]);
    }

    function update($id,$nom,$prenom,$email,$telephone){
        global $connexion;
        $sql ="UPDATE clients SET nom = ?, prenom = ?, email = ?, telephone = ? where id=?";
        $smtp = $connexion->prepare($sql);
        $smtp->execute([$nom,$prenom,$email,$telephone,$id]);
    }
}
