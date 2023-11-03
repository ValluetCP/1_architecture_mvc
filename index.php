<?php

require "inc/init.inc.php";

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
$method    = $_GET["method"] ?? "liste";
$id         = $_GET["id"] ?? null;

echo $controller."<br>";
echo $method."<br>";
echo $id."<br>";


$classeController = "Controllers\\" . ucfirst($controller) . "Controller";  // ucfirst: met la première lettre d'un string en majuscule
/* $classeController = "Controllers\UserController" 
   $methode = "liste"
*/

// echo $controller . "<br>";
// echo $method . "<br>";
// echo $id . "<br>";

/* On peut instancier un objet en utilisant un string pour le nom de la classe.
    _⚠ le nom de la classe doit être dans une variable pour pouvoir utiliser 'new'
*/
$controller = new $classeController;
// $UserController->update($id);
$controller->$methode($id);


//-----------------------------------------------------------------------------------//

// Exemple :

// controller : mitra
// method : izadi
// id :  456

// l'URL sera : 
// localhost/1_architecture_mvc/mitra/izadi/456