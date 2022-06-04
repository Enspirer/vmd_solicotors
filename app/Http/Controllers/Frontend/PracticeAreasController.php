<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeAreasController extends Controller
{
    public function index() {
        return view('frontend.practice_areas');
    }
}
