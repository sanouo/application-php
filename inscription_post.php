<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=application;charset=utf8', 'phpmyadmin', 'sana15');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


$pass_hache = sha1($_POST['pass']);
$req = $bdd->prepare('SELECT user FROM registration WHERE user = :user');
$req->execute(array(
    'user' => $_POST['user']));
$resultat = $req->fetch();
if (isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['confirmpass']))
{
    $_POST['user'] = htmlspecialchars($_POST['user']);
    $_POST['pass'] = htmlspecialchars($_POST['pass']);
    $_POST['confirmpass'] = htmlspecialchars($_POST['confirmpass']);
    if (($_POST['user'] != $resultat['user']) && ($_POST['pass'] == $_POST['confirmpass']) )
    {
        $req = $bdd->prepare('INSERT INTO registration(user, pass) VALUES(:user, :pass)');
        $req->execute(array(
            'user' => $_POST['user'],
            'pass' => $pass_hache,
            ));
        header('Location: index.php');
    }
  }
    else
    {
        echo 'Error';
    }



    if ($_POST['user'] == $resultat['user'] )
    {
        echo 'login exist. Please choose a other login';
    }
    else
    {
        echo 'login OK';
    }

    if ($_POST['pass'] == $_POST['confirmpass'])
    {
      echo 'password OK';
    }
    else{
      echo 'the password field must be identical to the confirm field';
    }
?>
