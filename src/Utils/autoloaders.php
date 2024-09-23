<?php

namespace Dubuc\Utils;

function myAutoloadingWithPrefix(string $className)
{
    $prefix = 'Dubuc\\';
    $baseDir = __DIR__ . '/../'; // Chemin vers le répertoire src

    $lengthPrefix = strlen($prefix);
    if (strncmp($prefix, $className, $lengthPrefix) !== 0) {
        return; // Si le namespace ne commence pas par 'Dubuc\', on ne fait rien
    }

    // Remplacement du namespace par le chemin du fichier
    $pathTemp = str_replace($prefix, $baseDir, $className);
    // Remplacer les backslashes par des slashes pour créer un chemin de fichier
    $pathToClassFile = str_replace('\\', '/', $pathTemp) . '.php';

    // Vérification de l'existence du fichier
    if (file_exists($pathToClassFile)) {
        require_once $pathToClassFile;
    } else {
        echo "Classe non trouvée : " . $pathToClassFile . "<br><br>";
    }
}

// Enregistrer la fonction d'autoload
spl_autoload_register('Dubuc\Utils\myAutoloadingWithPrefix');
