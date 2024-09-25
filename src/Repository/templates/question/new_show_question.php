<!--fichier templates\question\new_show_question.php-->
<?php
/**
 * Pour permettre l'inférence dans l'IDE (facultatif)
 *
 * @var Dubuc\Entity\Question $question 
 */
?>
<article>
    <header>
        <h2>Vous jouez pour la note de <span><?php echo $question->getLevel(
                ); ?></span>/20</h2>
    </header>
    <section>
        <h3>Question posée :</h3>
        <div><?php echo htmlspecialchars($question->getContentText()) ?></div>
    </section>
    <section>
        <p>Question proposée le : <?php echo htmlspecialchars(
                $question->getCreatedAt()->format('Y-m-d H:i:s')
            ) ?></p>
    </section>
</article>
