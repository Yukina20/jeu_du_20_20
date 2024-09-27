<?php

namespace Dubuc\Controller;
use Dubuc\Utils\ViewRender;

class BaseController
{

    public static function renderViewTemp(
        string $viewDefinition,
        array $data = []
    ): void {
        extract($data);

        include __DIR__.'/../../viewDefinitions/'.$viewDefinition.'.php';

    }

}