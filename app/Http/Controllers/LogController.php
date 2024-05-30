<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LogController extends Controller
{
    public function masuk() : View
    {
        return view('log_masuk');
    }

    public function keluar() : View
    {
        return view(null);
    }
}
