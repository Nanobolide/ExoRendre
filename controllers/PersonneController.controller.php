<?php
require_once "models/PersonnelManager.class.php";

class PersonneController
{
    private $personelManager;


    public function __construct()
    {
        $this->personelManager = new PersonnelManager;
        // $this->personelManager ->chargementPersonnel();
    }

    public function ajoutPersonnel()
    {
        require "views/Ajouter.view.php";
    }


}