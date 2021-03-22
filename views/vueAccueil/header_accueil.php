<!-- HEADER -->
<header>

<nav class="navbar navbar-expand-lg navbar-dark">
   <div class="container">
      <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
     </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
         <ul class="navbar-nav mr-auto">
            <li class="nav-item">
               <a class="nav-link" href="#">Boutique</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Location</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Cours de surf</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">L'histoire</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Contact</a>
            </li>
         </ul>
         <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Recherche" aria-label="Search">
         </form>
         <a href="#" type="button" id="afficherZ2" class="btn">Connexion</a>
         <!-- on simule la saisi d'un bon login+mdp pour aller vers la back  -->
         <br>
        
      </div>
   </div>
   <p id="erreurMSG" class="mr-auto"> <?php if($gErreur) echo 'Identifiant ou mot de passe incorrect'; ?> </p>
</nav>

</header>