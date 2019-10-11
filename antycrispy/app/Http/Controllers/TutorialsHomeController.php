<?php

namespace App\Http\Controllers;

use App\Tutorial;
use Illuminate\Http\Request;

class TutorialsHomeController extends Controller
{
    public function index()
    {
        $tutorials = Tutorial::all();
        return view('tutorials/index', compact('tutorials'));
    }
}
