<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        $title = '私達について';
        $sub_title = 'ABOUT US';
        $hero_image_path = '';

        return view('front::pages.about.index', compact(
            'title',
            'sub_title',
            'hero_image_path'
        ));
    }
}
