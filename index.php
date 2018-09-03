<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
      <?php
        //index.php?startDate=2/05/2016&endDate=27/11/2016
        if (isset($_GET['startDate']) AND isset($_GET['endDate'])) {
            echo 'Date de debut : ' . $_GET['startDate'] . '<br />Date de fin : ' . $_GET['endDate'];
        }
       ?>
    </p>
  </body>
</html>
