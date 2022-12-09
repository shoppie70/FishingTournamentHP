<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class LowerPageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function about_us(): Renderable
    {
        $title = '私達について';
        $sub_title = 'ABOUT US';
        $hero_image_path = '';

        return view('front::pages.lower_pages.about_us', compact(
            'title',
            'sub_title',
            'hero_image_path'
        ));
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function member(): Renderable
    {
        $title = 'メンバー紹介';
        $sub_title = 'MEMBER';
        $hero_image_path = '';

        return view('front::pages.lower_pages.member', compact(
            'title',
            'sub_title',
            'hero_image_path'
        ));
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function sponsor(): Renderable
    {
        $title = 'スポンサーリンク';
        $sub_title = 'SPONSOR';
        $hero_image_path = '';

        return view('front::pages.lower_pages.sponsor', compact(
            'title',
            'sub_title',
            'hero_image_path'
        ));
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function privacy_policy(): Renderable
    {
        $title = 'プライバシーポリシー';
        $sub_title = 'PRIVACY POLICY';
        $hero_image_path = '';

        return view('front::pages.lower_pages.privacy_policy', compact(
            'title',
            'sub_title',
            'hero_image_path'
        ));
    }
}
