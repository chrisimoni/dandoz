<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function showPage() {
        return view('searchPage');
    }

    public function showGpaPage() {
        return view('gpaPage');
    }
}
