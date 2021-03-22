<!-- LOCATION DE MATERIEL -->
<section class="pAdmin">
   <div class="container">
      <div class="bloc location" >
      <a href="index.php?act=cad" type="button" class="btn ">Retour</a> 
      <a href="index.php?act=cru&req=c" type="button" class="btn float-right">Créer</a>
         <h2>Tarifs</h2>
         <p><?php 
            if(!empty($gMsgInfo)){
               if($gMsgInfo == 12){
                  $msgErr = false;
               }else if($gMsgInfo == 13){
                  $msgErr = false;
               }else if($gMsgInfo == 14){
                  $msgErr = false;
               }else{
                  $msgErr = true;
               }
            }
            // SI msgErr retourne vrai alors on affiche le message et redirection
            if(isset($msgErr) && $msgErr){
               echo'<br/>';
                  echo '<p class="alert alert-success">Action refuser! Vous tentez de modifier des paramètres !</p> ';
                  redirectionTimer("index.php?act=tar", 3) ;
            }

            if($gMsgInfo == 12) echo '<p class="alert alert-success">Création effectuée avec succès !<p>';
            if($gMsgInfo == 13) echo '<p class="alert alert-success">Modification effectuée avec succès !<p>';
            if($gMsgInfo == 14) echo '<p class="alert alert-success">Suppression effectuée avec succès !<p>';

            
            // if($gErreur == 110) echo '<p class="alert alert-warning">Création non effectuée !<p>';
            // if($gErreur == 115) echo '<p class="alert alert-warning">Modification non effectuée !<p>';
            // if($gErreur == 120) echo '<p class="alert alert-warning">Suppression non effectuée !<p>';
          ?></p> 
         <table class="table">
            <thead>
               <tr>
                  <th>Tarifs location</th>
                  <th>Planche de surf</th>
                  <th>Bodyboard</th>
                  <th>Combinaison</th>
               </tr>
            </thead>
            <tbody>
               <?php 
                  // Affichage du tableau dynamique tarifs
                  foreach($tabTarif as $valeur){
                     echo '<tr>';  
                     echo '<td>'.$valeur['libDuree'].'</td>';
                        foreach($tabCat as $val){
                           // if($valeur['PS'] == $val['categoProd'])
                           
                              echo '<td>'.$valeur[$val['categoProd']].'€ <a href="index.php?act=cru&cdu='.$valeur['codeDuree'].'&cpr='.$val['categoProd'].'&pl='.$valeur[$val['categoProd']].'&req=u"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                           </svg></a>
                           <a href="index.php?act=cru&cdu='.$valeur['codeDuree'].'&cpr='.$val['categoProd'].'&pl='.$valeur[$val['categoProd']].'&req=s"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                           </svg></a> </td>';
                           
                        }
                     echo '</tr>';
                  }
                  ?>
            </tbody>
         </table>
      </div>
   </div>
</section>
<?php

        