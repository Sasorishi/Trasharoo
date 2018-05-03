<?php
    function connexion()
    {
        $con = mysqli_connect("localhost", "root", "", "poubelle");
        return $con;
    }

    function deconnexion($con)
    {
        mysqli_close($con);
    }

    function selectAllM ($table)
    {
        $con = connexion();
        $requete = "select * from " .$table. ";";
        $resultats = mysqli_query($con, $requete);
        deconnexion($con);
        return $resultats;
    }

    function insertHabitationModele($tab)
    {
        $con = connexion();
        $requete = "insert into habitation values (null, '".$tab["adresse"]."',' ".$tab["cp"]."','".$tab["ville"]."','".$tab["type"]."','".$tab["idU"]."');";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteHabitationModele($idH)
    {
        $con = connexion();
        $requete = "delete from habitation where idH = ".$idH.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function updateHabitationModele($tab)
    {
        $con = connexion();
        $requete = "update habitation set adresse = '".$tab['adresse']."',
        cp = '".$tab['cp']."',
        ville = '".$tab['ville']."',
        type = '".$tab['type']."',
        idU = '".$tab['idU']."'
        where idH = ".$tab['idH'].";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdHabitationModele($idH)
    {
        $con = connexion();
        $requete = "select *from habitation where idH = " .$idH. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function insertLeveeModele($tab)
    {
        $con = connexion();
        $requete = "insert into levee values (null, '".$tab["datelevee"]."',' ".$tab["poids"]."','".$tab["idP"]."');";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteLeveeModele($idL)
    {
        $con = connexion();
        $requete = "delete from levee where idL = ".$idL.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function updateLeveeModele($tab)
    {
        $con = connexion();
        $requete = "update levee set datelevee = '".$tab['datelevee']."',
        poids = '".$tab['poids']."',
        idP = '".$tab['idP']."'
        where idL = ".$tab['idL'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdLeveeModele($idL)
    {
        $con = connexion();
        $requete = "select *from levee where idL = " .$idL. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function insertPoubelleModele($tab)
    {
        $con = connexion();
        $requete = "insert into poubelle values (null, '".$tab["couleur"]."',' ".$tab["nblevee"]."','".$tab["idD"]."','".$tab["idH"]."');";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deletePoubelleModele($idP)
    {
        $con = connexion();
        $requete = "delete from poubelle where idP = ".$idP.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function updatePoubelleModele($tab)
    {
        $con = connexion();
        $requete = "update poubelle set couleur = '".$tab['couleur']."',
        nblevee = '".$tab['nblevee']."',
        idD = '".$tab['idD']."',
        idH = '".$tab['idH']."'
        where idP = ".$tab['idP'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdPoubelleModele($idP)
    {
        $con = connexion();
        $requete = "select *from poubelle where idP = " .$idP. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }

    function insertTypeDechetModele($tab)
    {
        $con = connexion();
        $requete = "insert into dechet values (null, '".$tab["libelle"]."',' ".$tab["recyclability"]."','".$tab["tarif"]."');";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function deleteTypeDechetModele($idD)
    {
        $con = connexion();
        $requete = "delete from dechet where idD = ".$idD.";";
        echo $requete;
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function updateTypeDechetModele($tab)
    {
        $con = connexion();
        $requete = "update dechet set libelle = '".$tab['libelle']."',
        recyclability = '".$tab['recyclability']."',
        tarif = '".$tab['tarif']."'
        where idD = ".$tab['idD'].";";
        mysqli_query($con, $requete);
        deconnexion($con);
    }

    function selectWhereIdTypeDechetModele($idD)
    {
        $con = connexion();
        $requete = "select *from dechet where idD = " .$idD. ";";
        $resultat = mysqli_query($con, $requete);
        $ligne = mysqli_fetch_assoc($resultat);
        deconnexion($con);

        return $ligne;
    }
?>