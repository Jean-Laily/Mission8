<?php
    /**
     * M: Requete permetant d'afficher l'ensemble des données pour les 2 colonnes selectionné
     * O: @return result => permet d'obtenir le resultat de la requete sous forme de tableau associatif
     * I: @param NULL
     */
    function getCategoP(){
        global $pdo;

        //Requête de projection sur de la table categpProd
        $selection = 'SELECT categoProd, libCategoProd FROM categoprod ORDER BY ordreCat';

        $requetes = $pdo->prepare($selection);
        $requetes->execute();

        $result = $requetes->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    /**
     * M: Requete contenant des sous-requetes afin d'obtenir une projection de donnée spécifique contenue dans 5 colonne distincte
     * O: @return result => permet de retouner l'ensemble des données de 5 colonne
     * I: @param NULL
     */
    function getTarif(){
        global $pdo;

        // Cette requete permet d'afficher  l'ensemble du tableau grâce à des sous requête
        // Chaque sous requete prepare une selection du code categoProd  
        $selection = 'SELECT codeDuree, libDuree, 
                        (SELECT prixLocation 
                            FROM tarifer 
                            WHERE duree.codeDuree = tarifer.codeDuree AND categoProd = "PS") AS PS, 
                        (SELECT prixLocation 
                            FROM tarifer 
                            WHERE duree.codeDuree = tarifer.codeDuree AND categoProd = "BB") AS BB, 
                        (SELECT prixLocation 
                            FROM tarifer 
                            WHERE duree.codeDuree = tarifer.codeDuree AND categoProd = "CO") AS CO 
                    FROM duree 
                    ORDER BY ordreDuree';

        $requetes = $pdo->prepare($selection);
        $requetes->execute();

        $result = $requetes->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }

    /**
     * M: Requête permettant de creer un tarif. ex:cas où il y a suppression du tarif location "planche a surf" pour une duree de "6 jours"
     * O: @return NULL
     * I: @param duree => défini la colonne codeDuree
     *    @param catProd => défini la colonne categoProd
     *    @param prix => défini la colonne prixLocation
     */
    function getCreate($duree, $catProd, $prix){
        global $pdo;

        $msg = false;
        try{
            if(!empty($duree) && !empty($catProd) && !empty($prix)){
                // requete préparer avec des marqueurs
                $insertion='INSERT INTO tarifer VALUES (:coDuree, :cateProd, :prixL)';

                $requete = $pdo->prepare($insertion);

                //preparation avec methode bindParam la liaison entre le marqueur et la variable
                $requete->bindParam(':coDuree',$duree);
                $requete->bindParam(':cateProd',$catProd);
                $requete->bindParam(':prixL',$prix);
            
                $requete->execute();

                $msg = true;
            }else{
                $msg = false;
            }
        }catch(Exception $e){
            echo 'Echec de la requête ' ;
        }
        return $msg ;
    }

    /**
     * M: Requête permettant la modification d'un tarif 
     * O: @return NULL
     * I: @param duree => défini la colonne codeDuree
     *    @param catProd => défini la colonne categoProd
     *    @param prix => défini la colonne prixLocation
     */
    function getUpdate($duree, $catProd, $prix){
        global $pdo;

        $msg;
        try{
            // requete préparer avec des marqueurs
            $modification='UPDATE tarifer
                            SET prixLocation = :prixL
                            WHERE codeDuree = :coDuree AND categoProd = :cateProd ';

            $requete = $pdo->prepare($modification);
            //preparation avec methode bindParam la liaison entre le marqueur et la variable
            $requete->bindParam(':coDuree',$duree);
            $requete->bindParam(':cateProd',$catProd);
            $requete->bindParam(':prixL',$prix);

            $requete->execute();

            $msg = true;
          
        }catch(Exception $e){
            echo 'Echec de la requête ';
        }
        return $msg ;
    }

    /**
     * M: Requête permettant la suppression d'un tarif 
     * O: @return NULL
     * I: @param duree => défini la colonne codeDuree
     *    @param catProd => défini la colonne categoProd
     */
    function getDelete($duree, $catProd){
        global $pdo;

        $msg = false;
        try{
            $suppression='DELETE FROM tarifer WHERE codeDuree = :coDuree AND categoProd = :cateProd ';

            $requete = $pdo->prepare($suppression);

            //preparation avec methode bindParam la liaison entre le marqueur et la variable
            $requete->bindParam(':coDuree',$duree);
            $requete->bindParam(':cateProd',$catProd);

            $requete->execute();

            $msg = true;
        }catch(Exception $e){
            echo 'Echec de la requête ';
        }
        return $msg ;
    }
