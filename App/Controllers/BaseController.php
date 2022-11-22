<?php

namespace App\Controllers;

use App\Providers\View;

class BaseController
{
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
    public function render($viewName, $data = null, $error = null)
    {
        return $this->view->render($viewName, $data, $error);
    }


}