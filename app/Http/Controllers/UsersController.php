<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index()
    {
        $output = [];
        $this->_setResult('users', $output);
        return $this->_showResult();
    }

    public function me()
    {
        return auth()->user();
    }
}
