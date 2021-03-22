<section class="pAdmin">
   <div class="container">
      <div class="bloc" id="histoire">
      <a href="index.php?act=tar" type="button" class="btn ">Retour</a>
      <?php 
         
         // Parti affichage HTML SI $req = Create 
         switch ($gRequete){
         
         case "c" : 
         ?>
         <h2>Créer un nouveau tarif</h2>
         <form action="index.php?act=tar&req=c" method="post" class="formTarif">
            <div class="col-12 px-2 py-2 bg-warning d-flex justify-content-lg-center ">
               <label for="choixDuree" class="labForm"> Choix durée : </label>
               <select name="cDuree" id="choixDuree" required>
                  <option value=""> Selectionner une durée </option>
                  <?php foreach($tabTarif as $val){ 
                     echo '<option value="'.$val['codeDuree'].'">'.$val['libDuree'].'</option>'; }?>
               </select>
            </div>
            <br>
            <div class="col-12 px-2 py-2 bg-warning d-flex justify-content-lg-center ">
               <label for="choixProd" class="labForm" >Choix produit : </label>
               <select name="cProduit" id="choixProd" required>
                  <option value=""> Selectionner un produit </option>
                  <?php foreach($tabCat as $valeur){ 
                     echo '<option value="'.$valeur['categoProd'].'">'.$valeur['libCategoProd'].'</option>'; }?>
               </select>
            </div>
            <br>
            <div class="col-12 px-2 py-2 bg-warning d-flex justify-content-lg-center ">
               <label for="prxLoca" class="labForm">Prix location : </label>
               <input type="text" name="prixLoc" id="prxLoca" min="1" max="999" required/>
            </div>
            <br>
            <button class="btn float-right" type="submit"> Valider </button>
         </form>
      <?php
         break; 
         // Parti affichage HTMl SI $req == Update
         case "u" : 
            // gestion erreur pour les paramètres GET codeDuree, codeProduit et prix
            $msgErr = true;
            foreach($tabTarif as $val){
               if($val['codeDuree'] == $gCodeDuree ){
                  foreach($tabCat as $value){
                     if($value['categoProd'] == $gCategoProd){
                        if($val[$value['categoProd']] == $gPrixLoc){
                           $msgErr = false;
                        }
                     } 
                  } 
               }
            }
         // SI msgErr retourne vrai alors on affiche le message et redirection
         if(isset($msgErr) && $msgErr){
            echo'<br/>';
            echo '<p class="alert alert-success">Action refuser! Vous avez tenter de modifier des paramètres !</p> ';
            redirectionTimer("index.php?act=tar", 3) ;
         } ?>  
         <h2>Modifier le tarif</h2>
         <form action="index.php?act=tar&req=u" method="post" class="formTarif">
            <div class="col-12 px-2 py-2 bg-warning d-flex justify-content-lg-center ">
               <label for="choixDuree" class="labForm"> Choix durée : </label>
               <input type="text"  name="cDuree" id="choixDuree" value="<?php echo $gCodeDuree; ?>" readonly>
            </div>
            <br>
            <div class="col-12 px-2 py-2 bg-warning d-flex justify-content-lg-center ">
               <label for="choixProd" class="labForm" >Choix produit : </label>
               <input type="text"  name="cProduit" id="choixProd" value="<?php  echo $gCategoProd; ?>" readonly>
            </div>
            <br>
            <div class="col-12 px-2 py-2 bg-warning d-flex justify-content-lg-center ">
               <label for="prxLoca" class="labForm">Prix location : </label>
               <input type="text"  name="prixLoc" id="prxLoca" value="<?php echo $gPrixLoc; ?>" min="1" max="999" required/>
            </div>
            <br>
            <button class="btn float-right" type="submit"> Valider </button>
         </form>
      <?php 
         break;
         // Parti affichage HTMl SI $req == Delete
         case "d":
             // gestion erreur pour les paramètres GET codeDuree, codeProduit et prix
             $msgErr = true;
             foreach($tabTarif as $val){
                if($val['codeDuree'] == $gCodeDuree ){
                   foreach($tabCat as $value){
                      if($value['categoProd'] == $gCategoProd){
                        if($val[$value['categoProd']] == $gPrixLoc){
                           $msgErr = false;
                        } 
                      }
                   } 
                }
             }
            // SI msgErr retourne vrai alors on affiche le message et redirection
            if(isset($msgErr) && $msgErr){
               echo '<p class="alert alert-success">Action refuser! Vous avez tenter de modifier des paramètres !</p> ';
               redirectionTimer("index.php?act=tar", 3) ;
            } ?>
         <h2>Supprimer le tarif </h2>
         <form action="index.php?act=tar&req=s" method="post" class="formTarif">
            <div class="col-12 px-2 py-2 bg-warning d-flex justify-content-lg-center ">
               <label for="choixDuree" class="labForm"> Choix durée : </label>
               <input type="text"  name="cDuree" id="choixDuree" value="<?php echo $gCodeDuree; ?>" readonly>
            </div>
            <br>
            <div class="col-12 px-2 py-2 bg-warning d-flex justify-content-lg-center">
               <label for="choixProd" class="labForm" >Choix produit : </label>
               <input type="text"  name="cProduit" id="choixProd" value="<?php  echo $gCategoProd; ?>" readonly>
            </div>
            <br>
            <div class="col-12 px-2 py-2 bg-warning d-flex justify-content-lg-center ">
               <label for="prxLoca" class="labForm">Prix location : </label>
               <input type="text"  name="prixLoc" id="prxLoca" value="<?php echo $gPrixLoc; ?>" readonly/>
            </div>
            <br>
            <button class="btn float-right" type="submit"> Supprimer </button>
         </form>
      <?php 
         break;
            default :
            echo '<p class="alert alert-success">Action refuser! Vous avez tenter de modifier des paramètres !</p> ';
            redirectionTimer("index.php?act=tar", 3) ;
         break;
         
         }?>
      </div>
   </div>
</section>
    