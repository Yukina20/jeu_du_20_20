<?php

namespace Dubuc\Repository;
use Dubuc\Entity\Question;

class QuestionRepository
{
    private function getRandomQuestionByDifficulty(int $difficulty): Question
    {

        $filteredQuestions = [];

        foreach ($filteredQuestions as $question) {
            if ($question->getLevel() === $difficulty) {
                $filteredQuestions[] = $question;
            }
        }

        if (empty($filteredQuestions)) {
            return throw new \Exception("No questions found" . $difficulty);
        }

        $randomKey = array_rand($filteredQuestions);
        return $filteredQuestions[$randomKey];

    }

    public function findRandomQuestionByDifficulty($difficulty)
    {
        $questions = $this->getRandomQuestionByDifficulty($difficulty);
        return $questions;
    }

    public function findRandomQuestionByDifficultyAndLevel($difficulty)
    {

        $questions = $this->getRandomQuestionByDifficulty($difficulty);

        return $questions;
    }

}