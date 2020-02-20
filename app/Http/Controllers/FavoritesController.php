<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //
    public function index()
    {
        $output = [];
        $this->_setResult('favorites', $output);
        return $this->_showResult();
    }
}
