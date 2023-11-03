<?php

/* ⚠ Il faut inclure le fichier autoload AVANT d'exécuter la fonction session_start() sinon il y aura
        une error si on essaye de stocker un objet dans la variable superglobale $_SESSION */
require "autoload.php";

// Quand on met start ici, il se mettra automatiquement sur tous nos fichiers car init.inc.php est récupérer dans index.php
session_start();
include __DIR__ . "/functions.inc.php";
define("ROOT", "/project_name/");
