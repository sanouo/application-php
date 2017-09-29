<!-- Call of the database -->
<?php
        try
        {
        $bdd = new PDO('mysql:host=localhost;dbname=application;charset=utf8', 'phpmyadmin', 'sana15');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

?>


<?php
    $reponse = $bdd->prepare('DELETE  FROM project WHERE id = ?');
    $reponse->execute(array($_GET['sup']));
    $donnees = $reponse->fetch();


    header('Location: index.php');
?>
