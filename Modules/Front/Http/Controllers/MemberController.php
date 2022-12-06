<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $title = 'メンバー紹介';
        $sub_title = 'MEMBER';
        $hero_image_path = '';

        return view('front::pages.member.index', compact(
            'title',
            'sub_title',
            'hero_image_path'
        ));
    }
}
