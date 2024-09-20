<?php

namespace Dubuc\App;
require_once '../src/Utils/autoloaders.php';

spl_autoload_register('Dubuc\Utils\myAutoloadingWithPrefix');

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