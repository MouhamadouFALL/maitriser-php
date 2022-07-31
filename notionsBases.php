
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
print "multiplication 5.5 * 2.5 = ".$n1 * $n2; print "<br>";
print "soustraction 5.5 - 2.5 = ".$n2 - $n1; print "<br>";
print "addition 5.5 + 2.5 = ".$n2 + $n1; print "<br>";
print "division 5.5 / 2.5 = ".$n1 / $n2; print "<br>";







?>
