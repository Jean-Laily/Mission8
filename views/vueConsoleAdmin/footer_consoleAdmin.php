   <!-- FOOTER -->
   <footer>
      <div class="container">
         <div id="navigation">
            <div class="row justify-content-center">
               <div class="col-lg-4 col-sm-6 col-11">
                  <?php 
                      //affichage de la zone 1
                     include 'vueFooter/z1_footer.php'; 

                      //affichage de la zone 2
                     include 'vueFooter/z2_footer.php';
                  ?>
               </div>
               <?php
                  //affichage de la zone 3
                  include 'vueFooter/z3_footer.php';
                  
                  //affichage de la zone 4
                  include 'vueFooter/z4_footer.php';
               ?>
            </div>
         </div>
      </div>
      <div id="soutien">
         <img src="assets/images/regionreunion.jpg" alt="Région Réunion">
         <img src="assets/images/departement974.jpg" alt="Département de la Réunion">
         <img src="assets/images/irt.jpg" alt="IRT">
      </div>

   </footer>