<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplianceController extends Controller
{
    public function money_laundering() {
        return view('frontend.money_laundering');
    }

    public function complaints_procedure() {
        return view('frontend.complaints_procedure');
    }
}
