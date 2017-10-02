<!-- insertion header -->
<?php include('header.php'); ?>

<!-- insertion call database -->
<?php include('calldatabase.php'); ?>

<div class="registre">
<a href="inscription.php" class="btn btn-primary">subscribe</a>
</div>


        <!-- start of the formulaire -->
        <form class="connect" action="connexion_post.php" method="post">
            <img class="account" src="img/account.png" alt="icon account">
            <input type="text" name="user" placeholder="user">
            <input  type="password" name="pass" placeholder="password">
            <input class="tonbou" type="submit" name="connexion" value="connexion">
        </form>
        <!-- end of the formulaire -->


<!-- insertion footer -->
<?php include('footer.php'); ?>
