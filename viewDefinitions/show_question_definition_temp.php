//fichier viewDefinitions\show_question_definition_temp.php
//récupération du contenu qui constitue l'entête
ob_start();
//la constante magique __DIR__ retourne le chemin vers le dossier parent du
présent fichier. Ainsi, il est facile de déterminer le chemin qui mène à
header.php
include __DIR__.'/../templates/common/header.php';
$view_header = ob_get_clean();
//récupération du contenu qui constitue le pied de page
ob_start();
include __DIR__.'/../templates/common/footer.php';
$view_footer = ob_get_clean();
//récupération du contenu qui constitue le contenu principal
ob_start();
include __DIR__.'/../templates/question/new_show_question.php';
$view_main = ob_get_clean();
//inclusion de la vue de "base" qui maintenant a accès aux variables
$view_header, $view_main et $view_footer
include __DIR__.'/../templates/base.php';

<?php
//Le chemin est exprimé depuis le fichier point d'entrée.
$cssFiles = '<link type="text/css" rel="stylesheet"
href="../assets/css/style.css" />';

$jsFiles = '<script src="../assets/js/alert.js"></script>';