<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingsController extends Controller
{
    //
    public function index()
    {
        $output = [];
        $this->_setResult('billings', $output);
        return $this->_showResult();
    }
}
