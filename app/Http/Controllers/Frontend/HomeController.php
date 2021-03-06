<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Testimonial;
use Modules\Blog\Entities\Post;

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
        $posts = Post::where('featured','Enabled')->orderBy('order','desc')->get(); 

        return view('frontend.index',[
            'testimonials' => $testimonials,
            'posts' => $posts
        ]);
    }

    public function light_hero_1() {
        return view('frontend.light_hero_1');
    }

    public function light_hero_2() {
        return view('frontend.light_hero_2');
    }
}
