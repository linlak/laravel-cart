<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShippingsController extends Controller
{
    //
    public function index()
    {
        $output = [];
        $this->_setResult('shippigs', $output);
        return $this->_showResult();
    }
}
