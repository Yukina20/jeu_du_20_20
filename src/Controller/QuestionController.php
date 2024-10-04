<?php

namespace Dubuc\Controller;

use Dubuc\Repository\QuestionRepository;
use Dubuc\Repository\AnswerRepository;
use Dubuc\Entity\Answer;

class QuestionController
{
/**
* @throws \Exception
*/
public function showSimpleQuestionTemp(int $level)
{
// Instancier le modèle pour obtenir les données
$questionRepository = new QuestionRepository();
// Récupération d'une question
$question = $questionRepository->findRandomQuestionByDifficulty($level);

if (!$question) {
throw new \Exception("Aucune question trouvée pour le niveau $level.");
}

include '../Repository/templates/question/show_question.php';
}

/**
* @throws \Exception
*/
public function showQuestionWithRenderView(int $level): void
{
$questionRepository = new QuestionRepository();
$answerRepository = new AnswerRepository();

// Récupérer une question aléatoire par niveau de difficulté
$question = $questionRepository->findRandomQuestionByDifficulty($level);

if (!$question) {
throw new \Exception("Aucune question trouvée pour le niveau $level.");
}

// Récupérer les réponses associées à la question
$answers = $answerRepository->findByQuestion($question->getId());

// Vérifier si le nombre de réponses est différent de 4
if (count($answers) !== 4) {
// Générer des réponses pour garantir qu'il y a 4 réponses
$correctAnswer = new Answer("Réponse correcte", true);
$incorrectAnswer1 = new Answer("Réponse incorrecte 1", false);
$incorrectAnswer2 = new Answer("Réponse incorrecte 2", false);
$incorrectAnswer3 = new Answer("Réponse incorrecte 3", false);

// Réinitialiser les réponses avec 4 réponses
$answers = [$correctAnswer, $incorrectAnswer1, $incorrectAnswer2, $incorrectAnswer3];
}

// Assigner les réponses à la question
$question->setAnswers($answers);

// Affichage avec la vue
BaseController::renderFromViewDefinition(
'show_question_definition_temp',
['question' => $question]
);
}
}
