<?php

namespace Dubuc\App;

require_once '../src/Utils/autoloaders.php';

spl_autoload_register('Ravrat\Utils\myAutoloadingWithPrefix');

use Dubuc\Controller\QuestionController;

$questionController = new QuestionController();
$questionController->showSimpleQuestionTemp(1);

require_once "../repository/templates/question/show_question.php";

