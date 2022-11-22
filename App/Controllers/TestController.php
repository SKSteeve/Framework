<?php

namespace App\Controllers;

use App\Models\User;
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

        $user = new User();
        $user->create($params);

        return $this->render('index', $params, null, 'Successfully created user!');
    }
}