<?php

namespace Dubuc\Entity;
require_once '../src/Entity/Question.php';
require_once '../src/Entity/Answer.php';
use Dubuc\Entity\Question;
use Dubuc\Entity\Answer;

$question = new Question();

$question
    ->setContentText("Qu'est-ce que la loi de Moore")
    ->setLevel(1);

echo $question;
echo "<br>";

$answer = new Answer();

$answer
    ->setContentText("Une loi pour faire de l'hu(moor)");

echo $answer;