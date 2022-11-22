<?php

namespace App\Providers\Interfaces;

interface IRender {
    /**
     * @param $viewName
     * @param $data
     * @param $error
     * @param $success
     * @return mixed
     */
    public function render($viewName, $data = null, $error = null, $success = null);
}