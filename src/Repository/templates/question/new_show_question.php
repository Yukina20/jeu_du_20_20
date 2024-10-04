<!-- fichier templates\question\new_show_question.php -->
<?php
/**
 * Pour permettre l'inférence dans l'IDE (facultatif)
 *
 * @var Dubuc\Entity\Question $question
 */
?>
<article>
    <header>
        <h2>Vous jouez pour la note de <span><?php echo $question->getLevel(); ?></span>/20</h2>
    </header>
    <section>
        <h3>Question posée :</h3>
        <div><?php echo htmlspecialchars($question->getContentText()); ?></div>
    </section>
    <section>
        <p>Question proposée le : <?php echo htmlspecialchars($question->getCreatedAt()->format('Y-m-d H:i:s')); ?></p>
    </section>

    <!-- Nouvelle section pour afficher les réponses -->
    <section>
        <h3>Réponses :</h3>
        <?php if (!empty($question->getAnswers())): ?>
            <ul>
                <?php foreach ($question->getAnswers() as $answer): ?>
                    <li>
                        <?php echo htmlspecialchars($answer->getContentText()); ?>
                        <?php if ($answer->isTrue()): ?>
                            <strong>(Correcte)</strong>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Aucune réponse disponible pour cette question.</p>
        <?php endif; ?>
    </section>
</article>
