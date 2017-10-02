<?php include('calldatabase.php'); ?>

<?php
session_start();
$_SESSION = array();
session_unset();
session_destroy();

echo 'You are offline';
header('Location: index.php')
?>
