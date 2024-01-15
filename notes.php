
<?php

# Definir une constante
define('DB', "DataBase");

## Tester une constante <defined()>
if (defined('DB')){
    echo "OK"; echo '<br>';
    echo constant('DB'); echo '<br>';
}else{
    echo "KO"; echo '<br>';
}

# Definir une variable
$test = null;

$a = 'une chaine';
# Supprimer une variable
unset($a);

# Tester une variable (isset()) si elle est definit
if (isset($test)){
    echo "OK"; echo '<br>';
}else{
    echo "KO"; echo '<br>';
}

# Tester une variable (empty()) si elle est vide ou pas 
if (empty($test)){
    echo "OK - Vide"; echo '<br>';
}else{
    echo "KO - Non vide"; echo '<br>';
}

# pour voir letat dune variable à linstant T 
# var_dump(); die();

# Construire un Tableau : array()
$tab = [0 => 'Banane', 1 => 'Mangue', 2 => 'Orange', 3 => 'Pomme'];

# le no,bre element du tableau
$nb = count($tab);

# echo $tab; echo '<br>';
echo $nb; echo '<br>';

# Tester si un element est dans un tableau : in_array()
if (in_array('Banane', $tab)){
    echo "OK In tab"; echo '<br>';
}else{
    echo "KO"; echo '<br>';
}

# Chercher un element dans un tableau : in_array()
echo array_search('Banane', $tab); echo '<br>';

# trier une Tableau
sort($tab);

# Afficher un tableau
foreach ($tab as $key => $val){
    var_dump($key);
}

# Convertir un Chaine en tableau : explode()
$ch = explode(',', 'mere,pere,soeur,frere');
var_dump($ch); echo '<br>';

# Inverssement creer une chaine en un tableau: implode()
$family = array('father', 'mother', 'brother', 'sister', 'cousin');
$tb = implode('-', $family);
var_dump($tb); echo '<br>';

# max($tab) et min($tab) => determine min et maximun dun tableau

# verifier un type : is_
# arondir un nombre : round()
# Generer un nombre pour un interval: rand(inf, sup)

# chaine de caracteres : strlen(), strtolower(), strtoupper(), ucfirst(), trim(), ltrim(), rtrim(), substr(),  strpos(), str_replace()

# Creer un Objet:

class Product
{
    private $name;

    /** @var User */
    private $user;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_user()
    {
        return $this->user;
    }

    public function set_user(User $user)
    {
        $this->user = $user;
    }


}

class User
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function set_email($email)
    {
        $this->email = $email;
    }

    function __toString(){
        return "Email : ". $email;
    }

}

$user1 = new User('user1@localhost.com');

$prod = new Product("Ecran");
echo '<br>' . $prod->get_name() . '<br>';
# Modifier le nom produit
$prod->set_name("Frigo");
echo '<br>' . $prod->get_name() . '<br>';
# Injecter user dans Produit
$prod->set_user($user1);
# Afficher Email User depuis Produit
echo '<br>' . $prod->get_user()->get_email() . '<br>';

# Definir Une Date 
$date = new DateTime();
echo $date->format('d/m/Y'). '<br>';

# Definir Une Date donnee
$date1 = new DateTime('2023-01-15', new DateTimeZone('Africa/Dakar'));
echo $date1->format('d/m/Y H:i:sP'). '<br>';

# declare(strict_types=1) possible depuis php 7

# Fonction avec n Parameter
function spred(...$args) {
    var_dump($args);
} # Important si on ne sait pas combien 

# Inclure un fichier : 
    # require_once(__DIR__.'path')
    # include_once(__DIR__.'path')

    # require_once : appelle le fichier une seule fois
    # require : peut appeler le fichier plusieurs fois
# require : émettre une erreur si le fichier n'hesiste pas
# include : émettre un warning si le fichier n'hesiste pas

# <form method='get' enctype='multipart/form-data' action=''><form/>

# $_GET : contient lensemble des parametres(input du Formulaire) de lURL
# $_POST : contient lensemble des input du Formulaire

# Stocker les images dans un dossier sur le serveur
# Jeux de caracteres pour creer une base dedonnee : utf8mb4_general_ci
# nom table en utf8

# Les Objets du projet : Product, User, Category




