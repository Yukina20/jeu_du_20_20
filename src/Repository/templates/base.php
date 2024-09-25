<!--fichier templates\base.php-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset($view_title) ? $view_title : 'Jeu du 20/20'; ?>
    </title>
    <!-- s'il y a un ou des liens vers des fichiers css-->
    <?php if (isset($cssFiles)): ?>
        <?php echo $cssFiles; ?>
    <?php endif; ?>
    <!-- s'il y a un ou des liens vers des fichiers js-->
    <?php if (isset($jsFiles)): ?>
        <?php echo $jsFiles; ?>
    <?php endif; ?>
</head>
<body>
<!--si le contenu d'entête de la page est défini-->
<?php if (isset($view_header)): ?>
<header>
    <?php echo $view_header; ?>
</header>
<?php endif; ?>
<!--si le contenu principal de la page est défini-->
<?php if (isset($view_main)): ?>
    <main>
        <?php echo $view_main; // Contenu principal injecté ici ?>
    </main>
<?php endif; ?>
<!--si le contenu du pied de page est défini-->
<?php if (isset($view_footer)): ?>
    <footer>
        <?php echo $view_footer; ?>
    </footer>
<?php endif; ?>
</body>
</html>

