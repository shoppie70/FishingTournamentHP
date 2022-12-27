<?php

namespace Modules\Front\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        $page_links = [
            [
                'title' => '私達の活動',
                'path' => 'about_us',
                'image' => asset('assets/front/img/icons/boss.svg'),
            ],
            [
                'title' => 'イベント情報',
                'path' => 'event',
                'image' => asset('assets/front/img/icons/event.svg'),
            ],
            [
                'title' => '大会結果',
                'path' => 'result',
                'image' => asset('assets/front/img/icons/result.svg'),
            ],
            [
                'title' => 'スポンサーリンク',
                'path' => 'sponser',
                'image' => asset('assets/front/img/icons/sponser.svg'),
            ],
        ];

        $news_items = News::query()->get();

        return view('front::index', compact(
            'page_links',
            'news_items'
        ));
    }
}
