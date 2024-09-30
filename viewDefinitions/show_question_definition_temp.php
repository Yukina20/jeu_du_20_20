<?php

// Affichage des erreurs
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Définir la base de l'application
$baseDir = 'E:/2 eme annee/dev/jeux/jeu_du_20_20/src/Repository/templates'; // Chemin absolu vers le dossier templates

// Chemins absolus pour les fichiers
$headerPath = $baseDir . '/common/header.php';
$footerPath = $baseDir . '/common/footer.php';
$newQuestionPath = $baseDir . '/question/new_show_question.php';
$basePath = $baseDir . '/base.php';

// Inclure l'en-tête
if (file_exists($headerPath)) {
    ob_start();
    include $headerPath;
    $view_header = ob_get_clean();
} else {
    // Gérer l'erreur si besoin
}

// Inclure le pied de page
if (file_exists($footerPath)) {
    ob_start();
    include $footerPath;
    $view_footer = ob_get_clean();
} else {
    // Gérer l'erreur si besoin
}

// Inclure la nouvelle question
if (file_exists($newQuestionPath)) {
    ob_start();
    include $newQuestionPath;
    $view_main = ob_get_clean();
} else {
    // Gérer l'erreur si besoin
}

// Inclure le fichier de base
if (file_exists($basePath)) {
    include $basePath;
} else {
    // Gérer l'erreur si besoin
}

// Chemins relatifs pour les fichiers CSS et JS
$cssFiles = '<link type="text/css" rel="stylesheet" href="/assets/style.css" />'; // Chemin absolu pour le CSS
$jsFiles = '<script src="/assets/js/alert.js"></script>'; // Chemin absolu pour le JS

// Inclure le CSS et le JS dans la page
if (isset($cssFiles)) {
    echo $cssFiles;
}
if (isset($jsFiles)) {
    echo $jsFiles;
}
