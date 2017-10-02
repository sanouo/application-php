<?php include('header.php'); ?>
<?php include('calldatabase.php'); ?>

<div class="registre">
  <form class="logout" action="deconnexion_post.php" method="post">
    <button type="submit" value="Submit" class="btn btn-primary">Log out</button>
  </form>
</div>

<!-- start of the form -->
        <form class="insertion" action="accueil_post.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" name="project"  placeholder="project">
          </div>
          <div class="form-group">
            <input type="text" class="form-control description" id="formGroupExampleInput2" name="description" placeholder="description">
          </div>
          <!-- <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput5" name="task" placeholder="task">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput3" name="stage" placeholder="stage">
          </div> -->
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput4" name="datelimit" placeholder="dateLimit : 2017/09/29">
          </div>
          <button type="submit" value="Submit" class="btn btn-primary submi">Submit</button>
        </form>
<!-- end of the form -->


<!-- start of the div class container -->
        <div class="container">
          <div class="row">


          <?php  $reponse = $bdd->query('SELECT * FROM project');
                while ($donnees = $reponse->fetch())
                {
                ?>
            <div class="card carte col-12 col-md-6 col-lg-4">
              <div class="card-block">
              <h3 class="card-title"><?php echo $donnees['project']; ?></h3>
              <p class="card-text"><?php echo $donnees['description']; ?></p>
              <p class="card-text"><?php echo $donnees['datelimit']; ?></p>
              <a href="detailprojet.php?detail=<?php echo $donnees['id']; ?>" class="btn btn-primary tonbou detail">Detail</a><br>
              <a href="supprim.php?sup=<?php echo $donnees['id']; ?>"><i class="material-icons">delete</i></a>
              </div>
            </div>

            <?php
              }
              $reponse->closeCursor();
              ?>
          </div>
        </div>
<!-- end of the div class container -->


<!-- insertion footer -->
<?php include('footer.php'); ?>
