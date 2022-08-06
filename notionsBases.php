
<?php


// Aborder les types 
$bool = true; 
echo gettype($bool); // permet d'affcher le type de la variable
print "<br>";

$int = 123; echo gettype($int);
print "<br>";

// type Float
$float = 12.3; echo gettype($float);
print "<br>";

// type String 
$string = "je suis donc je pense. num : $int "; // "" : interprete ce qui est à l'intérieur
$String = 'je suis donc je pense. num : $int '; // '' : n'intèprête pas ce qui est à l'intérieur
print "$string \"  \" $String";
print "<br>";   

// les conversions implicites
$nombre = 12 + "12.5";
print $nombre;
// "12.5" ==> 12.5 | true ==> 1 | false ==> 0
print "<br>";

// type tableau
$array = [9, 8, 7];
$Array = array(6, 5, 4);
//print$array;
//print $Array;
print "<br>";

// type NULL
$null = NULL;
print $null;
print "<br>";

// type OBjet

class Demo
{
    function do()
    {
        print "I'm object !";
    }
}
$demo = new Demo();
$demo->do();

print "<br>";


// opérations

$n1 = 5.5;
$n2 = 2.5;

print $n1 * $n2; print "<br>";
print $n2 - $n1; print "<br>";
print $n2 + $n1; print "<br>";
print $n1 / $n2; print "<br>";

// opérateur de concaténation
print "---------------------------- opérateur de concaténation -------------------------------"; 
print "$n1$n2"; print "<br>";
print $n1.$n2; print "<br>";
print "multiplication 5.5 * 2.5 = ".$n1 * $n2; print "<br>";
print "soustraction 5.5 - 2.5 = ".$n2 - $n1; print "<br>";
print "addition 5.5 + 2.5 = ".$n2 + $n1; print "<br>";
print "division 5.5 / 2.5 = ".$n1 / $n2; print "<br>";

// use HEREDOC
$nom = "Naby";

//echo <<<END 
//    Hello $nom.
//    Welocome to own site. 
//\n
//END;

print "<br>";

# commentaire sur une ligne
// commentaire sur une ligne

/*
commentaire sur plusieurs lignes
*/

# les fonctions de débogue
$tab = [12, 3.5, "oui", true, [5, 6, 7]];
echo "affichage with echo"; print "<br>"; // deboggage legere

var_dump($array); print "<br>";
var_export($Array); print "<br>";
print_r($tab);

print "<br>";
print("-------------------------------------------------------------------");
print "<br>";

// fonctions sur les chaires

$fruits = "mangue banane orange";

$array_fruits = explode(" ", $fruits); // convertir ma chaine en array 
var_dump($array_fruits);
print "<br>";

// inverssement 

$string_fruits = implode(" ", $array_fruits);
var_dump($string_fruits);
print "<br>";

// formater une chaine : sprint()
$name = "Jhon";
$heure = 12;
$format = "Hi, %s welcome it's %d h";
print sprintf($format, $name, $heure); // insert dans la chaine la valeur des variables $name et $heure
print "<br>";

// fonction de remplacement : str_replace()
$adresse = "colobane fann";
print str_replace("fann", "Bel Aair", $adresse); // remplace fann par Bel Air dans la chaine
print "<br>";

// compter le nombre de caracteres dans une chaine : strlen()
$string = "Colobane Fann";
print strlen($string);
print "<br>";

// supprimer les espaces de debut de fin : trim()
$string = "  je suis  ";
echo trim($string);
print "<br>";

// recuperer un caractere ou un sous chaine dans une chaine : substr()
$string = "nullement";
echo substr($string, -3); //retourne une sous cahine en commencant à la fin 
print "<br>";
echo substr($string, 2);  //retourne une sous cahine en commencant au debut 
print "<br>";
echo substr($string, 0, -4);  //retourne une sous cahine
print "<br>";

// mettre en majuscule le premier caractere du mot : ucfirst()
$string = "nullement";
print ucfirst($string);
print "<br>";


// les fonctions de bases pour la manipulation des nombres
// valeur absolue : abs()
print abs(-5.5);
print "<br>";
// arondir par valeur inférieure : floor()
print floor(5.98);
print "<br>";
// arondir par valeur supérieure : ceil()
print ceil(5.98);
print "<br>";
// arondir : round()
print round(5.54, 1);
print "<br>";
print round(5.57, 1);
print "<br>";
// le noombre PI : pi()
print pi();
print "<br>";



print "<br>";

print "<br>";

print "<br>";

?>
