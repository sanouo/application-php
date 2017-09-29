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
$req = $bdd->prepare('INSERT INTO project(project, description) VALUES(:project, :description)');
$req->execute(array(
    'project' => $_POST['project'],
    'description' => $_POST['description']
    ));
header('Location: index.php');
?>
