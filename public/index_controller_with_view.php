// fichier public\index_controller_with_view.php
namespace Dubuc\App;
//import de la ou des fonctions d'autoload
require_once '../src/Utils/autoloaders.php';
//enregistrement des fonctions d'autoload
spl_autoload_register('Ravrat\Utils\myAutoloadingWithPrefix');

use Dubuc\Controller\QuestionController;
$questionController = new QuestionController();
$questionController->showQuestionWithRenderView(1);