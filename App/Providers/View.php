<?php

namespace App\Providers;

use App\Providers\Interfaces\IRender;

class View implements IRender
{
    const VIEW_FOLDER = __DIR__ . "/../../Resources/Views/";
    const VIEW_EXTENSION = ".php";

    /**
     * @param string $viewName
     * @param $data
     * @param $error
     * @return mixed
     */
    public function render($viewName, $data = [], $error = null, $success = null)
    {
        return require_once self::VIEW_FOLDER
            . $viewName
            . self::VIEW_EXTENSION;
    }
}