<!-- fichier templates/question/show_question.php -->
<?php
/**
 * Permettre l'inférence des variables dans l'IDE (sans cette déclaration, l'IDE
 * considère que $question n'est jamais déclarée et considérera qu'il y a une
 * erreur. De plus, cela permet l'autocomplétion du code avec les méthodes de la
 * classe Question.
 *
 * @var Dubuc\Entity\Question $question
 */

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du 20/20</title>
</head>
<body>
<h1>Jeu du 20/20</h1>
<article>
    <header>
        <h2>Vous jouez pour la note de <span><?php echo htmlspecialchars($question->getLevel()); ?></span>/20</h2>
    </header>
    <section>
        <h3>Question posée :</h3>
        <div><?php echo htmlspecialchars($question->getContentText()); ?></div>
    </section>
    <section>
        <p>Question proposée le : <?php echo htmlspecialchars($question->getCreatedAt()->format('Y-m-d H:i:s')); ?></p>
    </section>
</article>
<footer>
    &copy; 2024 - Victoria Dubuc
</footer>
</body>
</html>
