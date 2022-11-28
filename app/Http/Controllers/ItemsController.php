<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ItemsController extends Controller
{

    public function index(): View
    {
        return view('items.index');
    }

    public function edit(): View
    {
        return view('items.edit');
    }
}
