<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PracticeAreasController extends Controller
{
    public function index() {
        return view('frontend.practice_areas');
    }

    public function civil_litigation() {
        return view('frontend.civil_litigation');
    }

    public function contract_disputes() {
        return view('frontend.contract_disputes');
    }

    public function debt_recovery() {
        return view('frontend.debt_recovery');
    }

    public function drafting() {
        return view('frontend.drafting');
    }

    public function employment() {
        return view('frontend.employment');
    }

    public function immigration() {
        return view('frontend.immigration');
    }

    public function landlord() {
        return view('frontend.landlord');
    }
}
