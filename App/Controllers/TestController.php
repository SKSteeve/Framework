<?php

namespace App\Controllers;

use App\Providers\Request;

class TestController extends BaseController
{
    public function index()
    {
        $params = [];
        return $this->render('index', $params);
    }

    public function edit()
    {
        $params =[];

        return $this->render('edit', $params);
    }

    public function create(Request $request)
    {
        $params = $request->getBody();

        return $this->render('index', $params, null, 'Successfully created user!');
    }
}