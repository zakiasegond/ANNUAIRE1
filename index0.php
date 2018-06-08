<!DOCTYPE html>

<html>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	   <title>Inscription</title> 
	   <meta charset="utf-8">  <!--tout ce code permet de faire des fenetres de saisi -->
    </head>


    <body>
        <form method="POST" ACTION="">
        <br>

    Nom:
        <br>
        <input type="text" name="nom" size="20" maxlength="20"> 
        <br>
    Prenom:
        <br>
        <input type="text" name="prenom" size="20" maxlength="20">
        <br>

    Mail:
        <br>
        <input type="text" name="email" size="20" maxlength="20"> 
        <br>

    Entreprise:
        <input type="text" name="entreprise" size="20" maxlength="20"> 
        <br>

    datenaissance:
        <input type="text" name="datenaissance" size="20" maxlength="20"> 
        <br>

    rue
        <input type="text" name="rue" size="20" maxlength="20"> 
        <br>

    cp
        <input type="text" name="cp" size="20" maxlength="20"> 
        <br>

    ville
        <input type="text" name="ville" size="20" maxlength="20"> 
        <br>

    tel
        <input type="text" name="telephone" size="20" maxlength="20"> 
        <br>

    <button name="submit" type="submit" value="Envoyer">envoyer</button>

        </form>

    </body>

</html>

 

<?php



if(!empty($_POST['submit'])){

if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['entreprise']) && !empty($_POST['datenaissance']) && !empty($_POST['rue']) && !empty($_POST['cp']) && !empty($_POST['ville']) && !empty($_POST['telephone']))

{

echo 'Champs bien remplis, insertion dans la base de donnée.'; 

//Insertion dans la BDD de la saisie du formulaire

    try {

         $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

         $bdd = new PDO('mysql:host=localhost;dbname=Annuaire;charset=utf8', 'simoccauch19','azerty', $pdo_options);



         $req = $bdd->prepare('INSERT INTO contacts(nom, prenom, email, entreprise, datenaissance, rue, cp, ville, telephone)

   VALUES(:nom, :prenom, :email, :entreprise, :datenaissance, :rue, :cp, :ville, :telephone)');

$req->execute(array(

     ':nom' => $_POST['nom'],

     ':prenom' => $_POST['prenom'],

     ':email' => $_POST['email'],

     ':entreprise' => $_POST['entreprise'],

     ':datenaissance' => $_POST['datenaissance'],

     ':rue' => $_POST['rue'],

     ':cp' => $_POST['cp'],

     ':ville' => $_POST['ville'],

     ':telephone' => $_POST['telephone']

    ));



         header('Location: AjouterContact.php');

        }

    catch (Exception $e)

        {

        die('Erreur : ' . $e->getMessage());

        }

}

}

?>
