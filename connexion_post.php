<!-- insertion call database -->
<?php include('calldatabase.php'); ?>


<!-- verification information -->
<?php
$pass_hache = sha1($_POST['pass']);
$req = $bdd->prepare('SELECT * FROM registration WHERE user = :user AND pass = :pass');
$req->execute(array(
    'user' => $_POST['user'],
    'pass' => $pass_hache));
$resultat = $req->fetch();
if ($_POST['user'] != $resultat['user'] or $pass_hache != $resultat['pass'] )
{
    echo 'Bad login or password';
}
else
{
    session_start();
    echo 'You are connected';
    header('Location: accueil.php');
}
?>
