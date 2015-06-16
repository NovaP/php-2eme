<?php

$pv    = $_POST['pv'];
$fond = $_POST['fond'];
$min = $pv/$fond;

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Calcul d'intérêts</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Résultat de votre calcul</h1>

<?php
if ($min<5) {
    echo "vous êtes posey";
} else {
    echo "casse toi pauvre con";
}
?>


  </body>
</html>
