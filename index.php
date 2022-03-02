<?php
session_start();

    require "views/template.php";
         

$content = ob_get_clean();
$titre = "Ajout d'un livre";
require "views/Ajouter.view.php";
?>