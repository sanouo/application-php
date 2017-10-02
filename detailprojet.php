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





        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://code.jquery.com/jquery-{{JQUERY_VERSION}}.min.js" integrity="{{JQUERY_SRI_HASH}}" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
    </html>
