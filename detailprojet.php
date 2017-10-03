<?php include('header.php'); ?>
<?php include('calldatabase.php'); ?>

<div class="registre">
  <a class="back" href="accueil.php">Back</a>
</div>

        <?php
            $reponse = $bdd->prepare('SELECT * FROM project WHERE id = ?');
            $reponse->execute(array($_GET['detail']));
            $donnees = $reponse->fetch();
        ?>


        <div class="container">
          <div class="row">


            <div class="card carte info col-12 col-md-10 col-lg-8">
              <div class="card-block">
              <h3 class="card-title"><?php echo $donnees['project']; ?></h3>
              <p class="card-text"><?php echo $donnees['description']; ?></p>
              <p class="card-text"><?php echo $donnees['datelimit']; ?></p>
              </div>
            </div>
          </div>
          </div>


          <?php
       $reponse->closeCursor();
       ?>




<!-- insertion footer -->
<?php include('footer.php'); ?>
