<?php

namespace Dubuc\Utils;

class ViewRender
{

    public const VIEW_DEFINITIONS_DIRECTORY_PATH = '/../../viewDefinitions/';

    public static function getValidatedViewDefinitionPath(string $view): string
    {

        $viewDefinitionToCheck = __DIR__ . self::VIEW_DEFINITIONS_DIRECTORY_PATH . $view . '.php';

        if (!file_exists($viewDefinitionToCheck)) {
            throw new \Exception(
                "le fichier de définition de la vue à rendre n'existe pas :"
                . $viewDefinitionToCheck
            );
        }

        return $viewDefinitionToCheck;
    }

}