<!-- insertion header -->
<?php include('header.php'); ?>

<!-- insertion call database -->
<?php include('calldatabase.php'); ?>


<!-- start of the formulaire -->
        <form class="connect" action="inscription_post.php" method="post">
          <img class="account" src="img/account.png" alt="icon account">
          <input type="text" name="user" placeholder="user"><br>
          <input type="password" name="pass" placeholder="password"><br>
          <input type="password" name="confirmpass" placeholder=" confirm password"><br>
          <input class="tonbou" type="submit" name="submit" value="Submit">
        </form>
<!-- end of the formulaire -->


<!-- insertion footer -->
<?php include('footer.php'); ?>
