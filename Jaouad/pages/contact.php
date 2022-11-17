<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<body>
<h1 class="text">Oslo</h1>
<img src="image/banniere.jpg" alt="loca"/>
<?php
include "pages/menu.php"
?>
<h1 class="soust"><em>Pour nous contacter</em></h1>
<div class="logo">
<div class="ph1"><img src="image/contacts.jpg" alt="loca"/></div>
<h1 class="text1">
<form method="get" action="" name="form1">
        
        <label for="nom">Nom: </label><input type="text" name="nom" id="nom"  required>

        <br><label for="prenom">Prenom: </label><input type="text" name="prenom" id="prenom"  required>
        <br><label for="Ville">Ville: </label><input type="text" name="Ville" id="Ville" required>
       <br><label for="email">Email: </label><input type="email" name="email" id="email" placeholder="Entrez ici votre Email" required>
       <br><label for="Commentaire">Commentaire:</label><input type="Commentaire" name="Commentaire" id="Commentaire"  required>
        <br><input type="submit" value="Submit">
    
      </form>
      <hr>
      
      </form>
<ul class="nav">
        <li><a href="index.php?p=geo">Une brève présentation de Oslo sur son role en Belgique et dans le monde</a></li>
        <li><a href="index.php?p=hist">Un rappel historique, de sa fondation à aujourdh'hui</a></li>
        <li><a href="index.php?p=cult">Un tour d'horizon en matière d'art et culture</a></li>
        <li><a href="index.php?p=gal">Une galerie de photographies</a></li>
        <li><a href="index.php?p=form">Un formulaire pour nous contacter</a></li>
        <li><a href="index.php?p=link">Des liens vers des sites partenaires</a></li>
        <br>
        <li><a href="https://fr.wikipedia.org/wiki/Oslo">Sources :Wikipedia - Ville de Oslo</a></li>
        
        


    </ul>
</div>
   
</body>
</html>