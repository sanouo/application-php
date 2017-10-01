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
