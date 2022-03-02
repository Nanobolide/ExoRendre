<?php 
ob_start(); 
?>
      <form action="controllers/PersonneController.controller.php" method="POST">
        <div class="container mt-5">
          
        
        <fieldset>
       <div>
          <label for="">Nom:</label>
            <input type="text" name="nom" id=""class="form-control">
          </div>

          <div>
          <label for="">Prenom</label>
            <input type="text" name="prenom" id=""class="form-control">
          </div>

          <div>
           <div class="form-group">
             <label for="">Sexe</label>
             <select class="form-control" name="sexe" id="">
               <option></option>
               <option value="sexe">Masculin</option>
               <option value="sexe">Feminin</option>
             </select>
           </div>
          </div>

          <div>
          <label for="">Fonction :</label>
          <select class="form-control" name="fonction" id="">
               <option></option>
               <option value="fonction">Directeur</option>
               <option value="fonction">Employer</option>
               <option value="fonction">Technicien de surface</option>
             </select>
          </div>
          <div>
          <label for="">Email</label>
            <input type="text" name="email" id=""class="form-control">
          </div>
          <div>
          <label for="">Adresse</label>
            <input type="text" name="adresse" id=""class="form-control">
          </div>
          <div>
          <label for="">Télephone</label>
            <input type="" name="tel" id=""class="form-control">
          </div>

          <div>
            </div>
            <div class="form-group">
             <br>
              <input type="submit" class="btn btn-success" value="Enregistrer" name="Enregistrer">
             
              <input type="submit"
                class="btn btn-danger" value="Supprimer">
            </div>
            
          </div>
        </fieldset>
      </form>

      
<?php
$content = ob_get_clean();
$titre = "Ajout d'un livre";
require "template.php";
?>