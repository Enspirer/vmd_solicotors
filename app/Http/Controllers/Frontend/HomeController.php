<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Testimonial;

use App\Http\Controllers\Controller;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $testimonials = Testimonial::where('status','Enabled')->orderBy('order','desc')->get(); 

        return view('frontend.index',[
            'testimonials' => $testimonials
        ]);
    }
}
