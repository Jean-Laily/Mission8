<?php

    function getEquipe(){
        global $pdo;

        //Requête de projection sur de la table categpProd
        $selection = 'SELECT codeEq,surnomEq,fonctionEq FROM equipier ORDER BY ordreEquip';

        $requetes = $pdo->prepare($selection);
        $requetes->execute();

        $result = $requetes->fetchAll(PDO::FETCH_ASSOC);
        
        return $result;
    }


    /**
     * M:
     * O:
     * I:
     */
    function getCreat($codeEquipe, $surnomEquipe, $nomPrenom, $role){
        global $pdo;

        try{
            // requete préparer avec des marqueurs
            $insertion='INSERT INTO equipier VALUES (:codeEq, :surnomEq, :nomEq, :fonctionEq)';

            $requete = $pdo->prepare($insertion);
            //preparation avec methode bindParam la liaison entre le marqueur et la variable
            $param = [  'codeEq'        =>     $codeEquipe,
                        'surnomEq'      =>     $surnomEquipe,
                        'nomEq'         =>     $nomPrenom,
                        'fonctionEq'    =>     $role ];    //tableau associatif key => value

            $requete->execute($param);

        }catch(Exception $e){
            echo 'Echec : ' .$e->getMessage();
        }
       

    }

    /**
     * M:
     * O:
     * I:
     */
    function getUpdat($surnomEquipe, $nomPrenom, $role){
        global $pdo;

        try{
            // requete préparer avec des marqueurs
            $modification='UPDATE equipier
                            SET prixLocation = :prixL
                            WHERE codeDuree = :coDuree AND categoProd = :cateProd ';

            $requete = $pdo->prepare($modification);
            //preparation d'un array pour faire la liaison entre le marqueur et la variable
            $param = [  'surnomEq'      =>     $surnomEquipe,
                        'nomEq'         =>     $nomPrenom,
                        'fonctionEq'    =>     $role ];    //tableau associatif key => value

            $requete->execute($param);
        }catch(Exception $e){
            echo 'Echec : ' .$e->getMessage();
        }
    }

    /**
     * M:
     * O:
     * I:
     */
    function getDelet($codeEquipe){
        global $pdo;

        try{
            $suppression='DELETE FROM equipier WHERE codeEq = :codeEq';

            $requete = $pdo->prepare($suppression);
            $param = [  'codeEq'        =>     $codeEquipe ];    //tableau associatif key => value
            $requete->execute($param);

        }catch(Exception $e){
            echo 'Echec : ' .$e->getMessage();
        }

    }
