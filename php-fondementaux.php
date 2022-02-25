<style>
    h2{
        border-top:1px solid navy;
        border-bottom:1px solid navy;
        color:navy;
    }
    .vert{
        color:green;
    }
    .jaune{
        color:yellow;
    }
    .rouge{
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

#-----------------------------------------------------------------
echo "<hr> Concaténation et aaffectation combinées avec .= <br>";
$messageError = "Erreur sur le pseudo <br>";
$messageError .= "Erreur sur le mot de passe <br>";
print $messageError;

$message = "aujourd'hui" ; // ou alors :
$message = 'aujourd\'hui' ; // on échappe l'apostrophe écrite dans des quotes simples.

$txt = 'Bonjour';
echo "$txt tout le monde <br>"; // Dans les guillemets c'est son contenu qui est affiché.
echo '$txt tout le monde <br>'; // Dans des quotes simples, tout est du texte brut.on voit donc le nom de la variable en toute lettre.

// -------------------------------
echo '<h2> Constante  </h2>';
// -------------------------------
/* Une constante est comme une variable qui permet de conserver une valeur, mais celle ci ne peut être modifié durant l'exécution du script.
Exemple d'utilisation: on met les paramêtres de la BDD(base de données) pour ne pas risquer de les modifier.
*/

// Methode 1
define('CAPITALE_SENEGAL', 'Dakar');
/* On déclare la constante CAPITALE_SENEGAL et on lui affecte la valeur Dakar.
Par convention on l'écrit en majuscules.
*/
echo CAPITALE_SENEGAL.'<br>';

// Methode 2
const CONSTANTE_PI = 3.14; // on peut aussi déclarer une constante avec "const"
print CONSTANTE_PI."<br>";

// --
// Exercice: vous affichez "Bleu-Blanc-Rouge" en mettant le texte de chaque couleur dans une variable.

// $bleu = "<div class=bu>Bleu</div>";
// $blanc = "<div class=bc>Blanc</div>";
// $rouge = "<div class=red>Rouge</div>";

$vert = 'vert';
$jaune = 'jaune';
$rouge = 'rouge';

echo "<span class='vert'>$vert</span> - <span class='jaune'>$jaune</span> - <span class='rouge'>$rouge</span> <br>";
echo "$vert-$jaune-$rouge";

// -------------------------------
echo '<h2> Opérateurs arithmétiques  </h2>';
// -------------------------------
$a = 10;
$b = 2;

echo $a + $b .'<br>'; //affiche 12
echo $a - $b .'<br>'; // affiche 8
echo $a * $b .'<br>'; // affiche 20
echo $a / $b .'<br>'; // affiche 5
echo $a % $b .'<br>'; // affiche 0(vous avez 3 billes que vous répartissez sur 2 joueurs.Il reste 1 bille dans la main) : 3%2 = 1;

// -------
// Les opérateurs combinés :
$a += $b; // équivant à $a = $a + $b soit $a vaut  12.
$a -=$b; // équivaut à $a = $a -$b soit $a vaut 10 à la fin.
$a *= $b; // équivaut à $a = $a *$b soit $a vaut 20 à la fin.
$a /= $b; // équivaut à $a = $a / $b soit $a vaut 10 à la fin.
$a %= $b; //  équivaut à $a = $a % $b soit $a vaut 0 à la fin.

//--------------
//incrémenter et décrementer 
$i = 0;$i++; // incrementation : on ajoute 1 à $i. $i vaut donc 1.
$i--; // décrementation : on retire 1 a $i. $i vaut donc 1.