<?php

namespace Dubuc\Controller;
use Dubuc\Utils\ViewRender;

class BaseController
{

    public static function renderViewTemp(
        string $viewDefinition,
        array  $data = []
    ): void
    {
        extract($data);

        include __DIR__ . '/../../viewDefinitions/' . $viewDefinition . '.php';

    }

    public static function renderViewDefinition(
        string $viewDefinition, $data = []): void
    {
        $viewDefinitionPath = self::getValidatedViewDefinitionPath($viewDefinition);

        include $viewDefinitionPath;

    }

    /**
     * @throws \Exception
     */
    public static function renderFromViewDefinition(string $viewDefinition, $data = []): void
    {
        ViewRender::setData($data);
        ViewRender::renderFromViewDefinition($viewDefinition);
    }

}