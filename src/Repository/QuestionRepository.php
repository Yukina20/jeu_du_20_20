<?php

namespace Dubuc\Repository;

use Dubuc\Entity\Question;

class QuestionRepository
{
private array $questions; // Supposons que vous avez un tableau de questions initialisé

public function __construct(array $questions)
{
$this->questions = $questions; // Initialisation des questions via le constructeur
}

private function getRandomQuestionByDifficulty(int $difficulty): Question
{
$filteredQuestions = [];

foreach ($this->questions as $question) { // Utilisez $this->questions
if ($question->getLevel() === $difficulty) {
$filteredQuestions[] = $question;
}
}

if (empty($filteredQuestions)) {
throw new \Exception("No questions found for difficulty " . $difficulty); // Correction ici
}

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
