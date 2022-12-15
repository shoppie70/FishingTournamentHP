<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NewsController extends Controller
{
    protected string $base_title = 'お知らせ';

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(): Renderable
    {
        $title = $this->base_title . '一覧';
        $base_title = $this->base_title;
        $route_for_create = '';
        $method = 'POST';
        $items = News::query()->paginate(10);

        return view('admin::pages.news.index', compact(
            'base_title',
            'title',
            'method',
            'route_for_create',
            'items'
        ));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create(): Renderable
    {
        $title = $this->base_title . 'の作成';
        $base_title = $this->base_title;

        return view('admin::pages.news.create', compact(
            'title',
            'base_title'
        ));
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id): Renderable
    {
        return view('admin::edit');
    }
}
