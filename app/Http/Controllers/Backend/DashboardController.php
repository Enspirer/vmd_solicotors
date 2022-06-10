<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Modules\Blog\Entities\Post;
use Modules\Blog\Entities\Category;
use App\Models\ContactUs;

/**
 * Class DashboardController.
 */
class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $post = Post::get()->count();
        $category = Category::get()->count();
        $contacts = ContactUs::where('status','Pending')->get()->count();

        return view('backend.dashboard',[
            'post' => $post,
            'category' => $category,
            'contacts' => $contacts
        ]);
    }
}
