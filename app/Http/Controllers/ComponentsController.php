<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function components()
    {
        return view('bs-components.showall');
    }
}
