<!-- HISTOIRE / NOTRE EQUIPE -->
<section>
   <div class="container">
      <div class="bloc" id="histoire">
         <div class="row">
            <div class="col-lg-4"><img src="assets/images/logo.jpg" alt="Logo Surf Wave" class="img-fluid mx-auto d-block" width="300px"></div>
            <div class="bloc-info col-lg-8">
               <h2>Histoire</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident eius quo, aut inventore quos ad a possimus corrupti aliquid soluta.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam dolorum nesciunt, praesentium natus, suscipit minus totam, similique obcaecati debitis accusantium quo, animi unde! Ducimus placeat animi, adipisci assumenda! Possimus.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima numquam dolorum nesciunt, praesentium natus, suscipit minus totam, similique obcaecati debitis.</p>
            </div>
         </div>

         <div id="equipe">
            <h2>Notre équipe</h2>
            
            <div class="row">
            <?php 
               //affichage dynamique de l'equipe
               foreach($tabEquipe as $val){
               echo' <div class="col-lg-4 col-md-6 col-sm-6">
               <img src="assets/images/'.$val['codeEq'].'.jpg" alt="'.$val['surnomEq'].'" class="rounded-circle img-fluid">
                        <p class="nom">'.$val['surnomEq'].'</p>
                        <p class="role">'.$val['fonctionEq'].'</p>
                     </div>';
               } 
             ?>
            </div>
         </div>

         <div class="row">
            <div class="col-lg-7">
               <img src="assets/images/lagon.jpg" alt="Lagon" class="img-fluid">
            </div>
            <div class="col-lg-5">
               <p>Notre équipe est particulièrement concernée par la prévention et la préservation du littoral de l’île de La Réunion. Nous vous invitons à vous renseigner sur la page suivante :<br /><br /> www.site-web.com
               </p>
            </div>
         </div>

      </div>
   </div>
</section>