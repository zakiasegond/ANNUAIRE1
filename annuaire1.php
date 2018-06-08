<?php
$pdo = new PDO('mysql:host=localhost;dbname=annuaire', 'segond', 'loudmila32');
?>

?>



<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=annuaire;charset=utf8', 'segond', 'loudmila32');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());

}

$reponse = $bdd->query('SELECT * FROM contacts') ;
$cpt = $bdd->query('SELECT COUNT(*) AS nb_contacts FROM contacts') ;
while($donnees=$reponse->fetch()){
      echo '<p>Nom user= ' . $donnees['nom'];

}

while($result=$cpt->fetch()){

      echo '<p>Nombre de contacts= ' . $result[0];

}


 ?>


<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=annuaire;charset=utf8', 'segond', 'loudmila32');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());

}

$reponse = $bdd->query('SELECT * FROM contacts WHERE ville = "Auch"') ;
$cpt = $bdd->query ('SELECT * FROM contacts WHERE ville = "Auch"') ;
while($donnees=$reponse->fetch()){
      echo '<p>ville= ' . $donnees['nom'];

}



 ?>