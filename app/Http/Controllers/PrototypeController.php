<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrototypeController extends Controller
{
    public function __invoke()
    {
        return view('prototype');
    }
}
