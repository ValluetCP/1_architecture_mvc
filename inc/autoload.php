<?php

/**
La fonction 'chargeClass' sera donc appelé quand une class sera requise.
L'argument sera le nom de la class requise.

 */
function chargeClass($className)
{
    // On remplace les \ qui sont dans le nom de la class à charger par des / qui est le séparateur de dossier
    // utilisé dans la plupart des systèmes d'exploitation
    // ⚠ RAPPEL : dans les namespaces, on ne peut utiliser que les \

    $filePath = str_replace("\\", "/", $className);
    $root = __DIR__ . "/../" . $filePath . ".php";
    if (file_exists($root)) {
        require $root;
    } else {
        throw new Exception("La class $className n'a pas été trouvée.");
    }
}

/** 
La fonction spl_autoload_register permet de définir la fonction qui sera 
exécutée à chaque fois qu'une class sera requise par le code (par exemple,
quand on utilise le mot-clé 'new' pour instancier un objet)
 */

spl_autoload_register("chargeClass");


 // LA FONCTION "spl_autoload_register" 

// 1- Elle récupère le nom de class, dès qu'elle rencontre la première syntaxe "new" dans notre cas, étant donnée qu'on a inclus le fichier autoload, contenant la fonction "spl_autoload_register", cette fonction réagi dès qu'elle rencontre la syntaxe "$controller = new $classeController;" et elle récupère la valeur de la varible "$classeController". Cette variable contient le nom d'un fichierqui se trouve dans le dossier "Controller" (avec un C en majuscule)

// 2- En deuxième étape elle fait appel à la fonction "chargeClass", en lui envoyant comme paramètre la valeur de la variable "$classeController"

// Dès qu'il rencontre une instanciation, il va prendre le nom de la class qui est dans index

