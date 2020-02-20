<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    public function index()
    {
        $output = [];
        $this->_setResult('tasks', $output);
        return $this->_showResult();
    }
}
