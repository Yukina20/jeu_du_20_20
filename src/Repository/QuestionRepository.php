<?php

namespace Dubuc\Repository;

use Dubuc\Entity\Question;

class QuestionRepository
{
    private $questions = [];

    public function __construct() {
        // Initialisation des questions (exemples)
        $this->questions = [
            (new Question())->setContentText('Qu\'est-ce qu\'une variable en programmation ?')->setLevel(1)->setCreatedAt(new \DateTimeImmutable()),
            (new Question())->setContentText('Quelle est la différence entre une boucle "for" et "while" ?')->setLevel(1)->setCreatedAt(new \DateTimeImmutable()),
            (new Question())->setContentText('Qu\'est-ce qu\'un pointeur en langage C ?')->setLevel(1)->setCreatedAt(new \DateTimeImmutable()),
            (new Question())->setContentText('Expliquez la différence entre HTTP et HTTPS.')->setLevel(2)->setCreatedAt(new \DateTimeImmutable()),
            (new Question())->setContentText('Qu\'est-ce que le polymorphisme en programmation orientée objet ?')->setLevel(2)->setCreatedAt(new \DateTimeImmutable()),
            (new Question())->setContentText('Définissez ce qu\'est un algorithme de tri rapide (quick sort).')->setLevel(2)->setCreatedAt(new \DateTimeImmutable()),
        ];
    }

    private function getRandomQuestionByDifficulty(int $difficulty): Question
    {
        $filteredQuestions = [];

        // Filtrer les questions par niveau de difficulté
        foreach ($this->questions as $question) { // Utilisez $this->questions
            if ($question->getLevel() === $difficulty) {
                $filteredQuestions[] = $question;
            }
        }

        if (empty($filteredQuestions)) {
            throw new \Exception("No questions found for difficulty " . $difficulty);
        }

        // Sélectionner une question aléatoire
        $randomKey = array_rand($filteredQuestions);
        return $filteredQuestions[$randomKey];
    }

    /**
     * @throws \Exception
     */
    public function findRandomQuestionByDifficulty(int $difficulty): Question
    {
        return $this->getRandomQuestionByDifficulty($difficulty);
    }

    /**
     * @throws \Exception
     */
    public function findRandomQuestionByDifficultyAndLevel(int $difficulty): Question
    {
        return $this->getRandomQuestionByDifficulty($difficulty);
    }
}
