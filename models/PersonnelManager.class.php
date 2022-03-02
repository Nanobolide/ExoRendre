<?php 
require_once "Model.class.php";
require_once "Personnel.class.php";

class PersonnelManager extends Model
{
    private $personels;//tableau personnel

    public function ajoutPersonnel($personel)
    {
        $this->personels[] = $personel;
    }

    public function getPersonnel()
    {
        return $this->personels;
    }

    public function ajoutPersonnelBd($nom,$prenom,$sexe,$fonction,$email,$adresse,$tel)
    {
        $req = "INSERT INTO personnels (nom,prenom,sexe,fonction,email,adresse,tel) 
                        VALUES(:nom,:prenom,:sexe,:fonction, :email, :adresse,:tel)";
    
        $stmt = $this->getBdd()->prepare($req);
        $stmt->bindValue(":nom",$nom,PDO::PARAM_STR);
        $stmt->bindValue(":prenom",$prenom,PDO::PARAM_STR);
        $stmt->bindValue(":sexe",$sexe,PDO::PARAM_STR);
        $stmt->bindValue(":fonction",$fonction,PDO::PARAM_STR);
        $stmt->bindValue(":email",$email,PDO::PARAM_STR);
        $stmt->bindValue(":adresse",$adresse,PDO::PARAM_STR);
        $stmt->bindValue(":tel",$tel,PDO::PARAM_STR);
        $resultat = $stmt->execute();
        $stmt->closeCursor();
        

        if ($resultat > 0) {
                $personnel = new Personnel($this->getBdd()->lastInsertId(),$nom,$prenom,$sexe,$fonction,$email,$adresse,$tel);
                $this->ajoutPersonnel($personnel);
        }
    }
}