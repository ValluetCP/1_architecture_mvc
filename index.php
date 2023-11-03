<?php

require "inc/init.inc.php";

// à partir de index on lance autoload qui est dans inc et prnd la première instanciation (new)

/* 
URL: index.php?controller=user&method=update&id=32
*/

// // Syntaxe 1
// if (isset($_GET["controller"])) {
//     $controller = $_GET["controller"];
// } else {
//     $controller = "home";
// }

// // Syntaxe 2
// if (isset($_GET["controller"]))
//     $controller = $_GET["controller"];
// else
//     $controller = "home";

// // Syntaxe 3
// $controller = $_GET["controller"] ? $_GET["controller"] : "home";

// // Syntaxe 4
// $controller = $_GET["controller"] ?? "home";


//-----------------------------------------------------------------------------------//

// Autre syntaxe, voir ci-dessus
// Traduction : Si controller contient qqlch, l'afficher sinon afficher la page home
$controller = $_GET["controller"] ?? "home";
$method    = $_GET["method"] ?? "list";
$id         = $_GET["id"] ?? null;
// Si le tableau $_GET récupère dans l'URL une valeur dans l'id, 

// echo $controller."<br>";
// echo $method."<br>";
echo $id."<br>";


$classeController = "controller\\" . ucfirst($controller) . "Controller";  // ucfirst: met la première lettre d'un string en majuscule
/* $classeController = "controller\UserController" 
   $method = "list"
*/

// "\" : interprète comme , "aller à la ligne".
// "\\" : interprète comme , "supprimer 1 backslash" donc il en affichera qu'un seul.

// echo $controller . "<br>";
// echo $method . "<br>";
// echo $id . "<br>";

/* On peut instancier un objet en utilisant un string pour le nom de la classe.
    _⚠ le nom de la classe doit être dans une variable pour pouvoir utiliser 'new'
*/

// $controller = new Controller\HomeController;   -- idem
$controller = new $classeController;
// $UserController->update($id);
$controller->$method($id);


//-----------------------------------------------------------------------------------//

// Exemple :

// controller : mitra
// method : izadi
// id :  456

// l'URL sera : 
// localhost/1_architecture_mvc/mitra/izadi/456