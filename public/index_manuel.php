<?php

namespace Ravrat\Entity;
require_once '../src/Entity/Question.php';
require_once '../src/Entity/Answer.php';
use Dubuc\Entity\Question;
use Dubuc\Entity\Answer;

$answer = new Question();

$answer
    ->setContentText("Qu'est-ce que la loi de Moore")
    ->setLevel(1);

echo $answer;
echo "<br>";

$answer = new Answer();

$answer
    ->setContentText("Une loi pour faire de l'hu(moor)");

echo $answer;