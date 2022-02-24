<style>
    h2{
        border-top:1px solid navy;
        border-bottom:1px solid navy;
        color:navy;
    }
    .bu{
        color:blue;
    }
    .bc{
        color:grey;
    }
    .red{
        color:red;
    }
    
    table, td{
        border: 1px solid green;
        border-collapse : collapse;
    }
</style>

<?php 
##-----------------------------
echo "<h2>Les balises PHP.</h2>";
##-----------------------------
?>

<p>espace HTML car en dehors des balises de php</p>

<?php // pour ouvrir un php j'utilise cette balise

// Vous n'êtes pas obligé de fermer un passage en PHP quand vous êtes à la fin du script .

// Pour faire un commentaire sur une ligne 
# commentaire sur une ligne
/*
commentaire sur plusieurs lignes
*/

#----------------------------------------
echo "<h2>Affichages</h2>";
#----------------------------------------

echo 'Bonjour<br>'; // rappel:Echo est une instruction pour afficher dans le navigateur.Toutes les instructions se terminent  par un ; OBLIGATOIREMENT.

print "print fait la même chose qu'echo<br/>";  // autre instruction d'affichage qui fait la même chose que echo.

// Autres instructions que nous utiliserons 
print_r('codeVar'); // permet d'afficher le contenu d'une variable dans le navigateur.
echo "<br/>";
var_dump('nameVar'); // même chose que print_r mais affiche les types en plus.

#-----------------------------
echo "<h2> Variables </h2>";
#-----------------------------

// Une variable est un espace mémoire qui porte un nom et qui permet de stocker une valeur.
// En PHP, on représente une variable avec le signe $.

$nameVariable = 123; // on déclare la variable $number et on lui affecte (on donne) la valeur 123.
echo gettype($nameVariable); // gettype() est une fonction prédéfinie qui permet d'afficher le type d'une variable. Ici c'est un INTEGER.
print "<br>";

$nameVariable = 12.5; // on remplace la valeur 123 par 12.5 dans $number
echo gettype($nameVariable); // ici c'est un DOUBLE = FLOAT (nombre decimal)
print "<br/>";

$nameVariable = 'une chaîne';
echo gettype($nameVariable);
echo '<br/>';

$nameVariable = true;
echo gettype($nameVariable); //ici c'est un boolean (=boolean);

// par convention, un nom de variable commence par une lettre minuscule, puis on met une majuscule à chaque mot.Il peut contenir des chiffres (jamais au début), ou un "_"(pas au début ni ç la fin).Pas d'espace, pas d'accent, pas de caractères spéciaux.

print "<br>";
#----------------------------------
echo "<h2> Concaténation </h2>";
#----------------------------------

// En PHP on concatène (= faire suivre)les éléments avec le "." 

$a = "Hello ";
$b = "everybody";
echo $a . $b . '<br/>'; //On concatène les deux variables  et un string.Le point de concaténation peut être traduit par "suivi de.".



