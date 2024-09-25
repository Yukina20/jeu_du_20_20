<?php

namespace Dubuc\Controller;
use Dubuc\Repository\QuestionRepository;
class QuestionController
{

    /**
     * @throws \Exception
     */
    public function showSimpleQuestionTemp(int $level)
    {
        // Instancier le modèle pour obtenir les données
        $questionRepository = new QuestionRepository();
        //récupération d'une question
        $question = $questionRepository->findRandomQuestionByDifficulty($level);

        include '../Repository/templates/question/show_question.php';

    }

}