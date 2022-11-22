<?php

namespace App\Controllers;

use App\Providers\Interfaces\IRender;
use App\Providers\View;

abstract class BaseController implements IRender
{
    /**
     * @var View
     */
    public $view;

    public function __construct()
    {
        $this->view = new View();
    }

    /**
     * @param $viewName
     * @param $data
     * @param $error
     * @return mixed
     */
    public function render($viewName, $data = null, $error = null, $success = null)
    {
        return $this->view->render($viewName, $data, $error, $success);
    }
}