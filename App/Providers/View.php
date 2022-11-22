<?php

namespace App\Providers;

class View
{
    const VIEW_FOLDER = "./Resources/Views/";
    const VIEW_EXTENSION = ".php";

    /**
     * @param string $viewName
     * @param $data
     * @param $error
     * @return mixed
     */
    public function render(string $viewName, $data = null, $error = null)
    {
        return require_once self::VIEW_FOLDER
            . $viewName
            . self::VIEW_EXTENSION;
    }
}