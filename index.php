<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Application</title>
        <meta name="description" content="application to do list">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

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


<!-- start of the header -->
        <header>
          <h1>Application/Project</h1>
        </header>
<!-- end of the headear -->


<!-- start of the form -->
        <form action="index_post.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" name="project"  placeholder="project">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput2" name="description" placeholder="description">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput2" name="task" placeholder="task">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput3" name="stage" placeholder="stage">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput4" name="datelimit" placeholder="dateLimit : 2017/09/29">
          </div>
          <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
        </form>
<!-- end of the form -->


<!-- start of the div class container -->
        <div class="container">
          <div class="row">


          <?php  $reponse = $bdd->query('SELECT * FROM project');
                while ($donnees = $reponse->fetch())
                {
                ?>
            <div class="card carte col-12 col-md-6 col-lg-5">
              <div class="card-block">
              <h3 class="card-title"><?php echo $donnees['project']; ?></h3>
              <p class="card-title"><?php echo $donnees['description']; ?></p>
              <p class="card-text"><?php echo $donnees['datelimit']; ?></p>
              <a href="detailprojet.php?detail=<?php echo $donnees['id']; ?>" class="btn btn-primary tonbou">Detail</a>
              </div>
            </div>

            <?php
              }
              $reponse->closeCursor();
              ?>
          </div>
        </div>
<!-- end of the div class container -->

<a href="connexion.php">connection</a>
<a href="inscription.php">registration</a>
<!-- start of the footer -->
        <footer>
          <ul>
            <li>Mentions legales</li>
            <li>Chartes de confidentialite</li>
            <li>Copyright © 2059 Application/Project</li>
          </ul>
        </footer>
<!-- end of the footer -->



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
