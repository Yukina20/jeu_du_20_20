<?php

namespace Dubuc\Utils;

class ViewRender
{

    public const VIEW_DIRECTORY_PATH ='/../../templates/';

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

    /**
     * @throws \Exception
     */
    public static function renderFromViewDefinition(string $viewDefinition): void
    {
        $viewDefinitionPath = self::getValidatedViewDefinitionPath($viewDefinition);

        extract(self::$data);
        include $viewDefinitionPath;
    }
    
    public static function setData(array $data): void
    {
        self::$data = $data;
    }

    public static function getvalidatedViewPath(string $view): string
    {
        $viewToCheck = __DIR__ . self::VIEW_DIRECTORY_PATH . $view . '.php';

        if (!file_exists($viewToCheck)) {
            throw new \Exception(
                "Le fichier de vue à rendre n'existe pas :".$viewToCheck
            );
        }
        return $viewToCheck;
    }

    public static function getContentView(string $view): string
    {
        $viewPath = self::getValidatedViewPath($view);

        extract(self::$data);

        ob_start();

        include $viewPath;

        return ob_get_clean();
    }

}