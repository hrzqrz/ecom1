<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function create()
    {
        return view('admin.slider.create');
    }

    public function index()
    {
        return view('admin.slider.index');
    }
}
