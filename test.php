

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


// insert in the database

$req = $bdd->prepare('INSERT INTO stage(stage) VALUES(:stage)');
$req->execute(array(
    'stage' => $_POST['stage']

  ));

?>

<!-- TESSSSSSSSSSSSSSSSSSSSST -->
       <!-- start of the form -->
               <form action="test.php" method="post">
                 <div class="form-group">
                   <input type="text" class="form-control" id="formGroupExampleInput3" name="stage" placeholder="stage">
                 </div>


                 <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
               </form>
       <!-- end of the form -->
<!-- TESSSSSSSSSSSSSSSSSSSSST -->

<!-- <?php

    $reponse = $bdd->prepare('SELECT stage,project, description, datelimit
    FROM stage, project
    WHERE stage.id_project = project.id');
    $reponse->execute(array($_GET['essai']));
    $donnees = $reponse->fetch();

header('Location: detailprojet.php');
?> -->
