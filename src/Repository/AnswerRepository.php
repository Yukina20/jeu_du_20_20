<?php

namespace Dubuc\Repository;

use Dubuc\Entity\Question;
use Dubuc\Entity\Answer;

class AnswerRepository
{
    private array $answers = [];

    public function __construct() {
        // Initialisation des réponses (exemples)
        $this->answers = [
            new Answer('Réponse 1', true),
            new Answer('Réponse 2', false),
            new Answer('Réponse 3', false),
            new Answer('Réponse 4', false),
        ];
    }

    /**
     * Retourne les réponses associées à une question donnée.
     *
     * @param Question $question
     * @return Answer[]
     */
    public function findByQuestion(Question $question): array
    {
        // Ici, on peut faire une logique pour filtrer les réponses par question.
        // Par exemple, renvoyer les 4 réponses disponibles.
        return $this->answers;
    }
}
