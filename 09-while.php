<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Boucle while</h1>
    <p>C'est une boucle qui permet de tourner tant que ses paramètres (arguments) nous donnent true. C'est la boucle la plus dangereuse car on arrive vite à faire une boucle infinie non prévue. Son avantage est qu'elle est la plus rapide</p>
    <pre><code>while ( tant que c'est vrai)
        exécution...

    </code></pre>
    <?php $i=5;
    while($i<20){
        echo "$i ";
        $i+=5;
    }
    echo "<hr>";
// voici un tableau indéxe avec 5 valeurs
    $tab = [0,1,2,3,4];

    // seul le 0 représentant false, les autres valeurs true
    // on va mettre dans le while uen valeur au hasard de notre tableau
    // https://www.php.net/manual/en/function.array-rand.php
   
   function nombreTableauHasard(array $value){
    // création d'une variable locale qui va contenir uen valeur du tableau au hasard
    $nombre = array_rand($value);
    // si cette valeur est 0
    if($nombre==0){
        // on envoie false (pour notre while -> fin de la boucle)
        return false;
        //sinon
    }else{
        // on renvoie le nombre  venant du tableau
        return $nombre;
    }
      
    }
   
// tant que nombreTableauHasard($tab) vaut vrai (true), la boucle pourra s'arreter car la valeur 0 revoie false
    while( $a=nombreTableauHasard($tab)){
        // on affiche le numérique récupérer
        echo "$a";
    }
    


?>
</body>
</html>