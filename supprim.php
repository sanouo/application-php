<?php include('calldatabase.php'); ?>


<?php
    $reponse = $bdd->prepare('DELETE  FROM project WHERE id = ?');
    $reponse->execute(array($_GET['sup']));
    $donnees = $reponse->fetch();


    header('Location: accueil.php');
?>
