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
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle " href="" id="navBarDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Tarif</a>
                  <div class="dropdown-menu">
                     <a href="./index.php?act=tar" class="dropdown-item">Voir</a>
                     <a href="./index.php?act=cru&req=c" class="dropdown-item">Créer</a>
                     <a href="./index.php?act=tar" class="dropdown-item">Modifier</a>
                     <a href="./index.php?act=tar" class="dropdown-item">Supprimer</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navBarDropDown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion Equipe</a>
                  <div class="dropdown-menu">
                     <a href="./index.php?act=equ" class="dropdown-item">Voir</a>
                     <a href="#" class="dropdown-item">Créer</a>
                     <a href="#" class="dropdown-item">Modifier</a>
                     <a href="#" class="dropdown-item">Supprimer</a>
                  </div>
               </li>
            </ul>
            <a class="btn" href="./index.php?act=dx" type="button">déconnection</a>
         </div>
      </div>
   </nav>
</header>