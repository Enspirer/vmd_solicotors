<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplianceController extends Controller
{
    public function index() {
        return view('frontend.compliance');
    }

    public function compliance_2() {
        return view('frontend.compliance_2');
    }
}
