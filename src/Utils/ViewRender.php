<?php

namespace Dubuc\Utils;

class ViewRender
{

    public const VIEW_DIRECTORY_PATH = '/../../templates/';

    public const VIEW_DEFINITIONS_DIRECTORY_PATH = '/../../viewDefinitions/';

    public static array $data = [];

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
    public static function renderFromViewDefinition(string $viewDefinition, $data = []): void
    {
        $viewDefinitionPath = self::getValidatedViewDefinitionPath($viewDefinition);

        extract(self::$data);
        ViewRender::renderFromViewDefinition($viewDefinition);
        include $viewDefinitionPath;
    }

    public static function setData(array $data): void
    {
        self::$data = $data;
    }

    public static function getValidatedViewPath(string $view): string
    {
        $viewToCheck = __DIR__ . self::VIEW_DIRECTORY_PATH . $view . '.php';

        if (!file_exists($viewToCheck)) {
            throw new \Exception(
                "Le fichier de vue à rendre n'existe pas :" . $viewToCheck
            );
        }
        return $viewToCheck;
    }

    /**
     * @throws \Exception
     */
    public static function getContentView(string $view): string
    {
        $viewPath = self::getValidatedViewPath($view);

        extract(self::$data);

        ob_start();

        include $viewPath;

        return ob_get_clean();
    }

    public const CSS_DIRECTORY_PATH = '../../assets/css/';

    private static function buildPathToCssFilename(string $view): string
    {
        $filePath = self::CSS_DIRECTORY_PATH . $view . '.css';

        return $filePath;
    }

    public const JS_DIRECTORY_PATH = '../../assets/js/';

    public static function buildPathToJsFilename(string $jsFilename): string
    {
        $filePath = self::JS_DIRECTORY_PATH . $jsFilename . '.js';
        return $filePath;
    }

    public static function getJsScripts(array $fileJs): string
    {
        $jsScripts = "";

        foreach ($fileJs as $filename) {
            $jsPath = self::buildPathToJsFilename($filename);
            $jsScripts .= "\n" . '<script src="' . $jsPath . '"defer ></script>' . "\n";
        }
        return $jsScripts;
    }
}