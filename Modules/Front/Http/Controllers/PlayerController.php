<?php

namespace Modules\Front\Http\Controllers;

use App\Models\Player;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;
use Illuminate\Validation\ValidationException;
use Modules\Front\Http\Requests\StorePlayerRequest;
use Modules\Front\UseCases\Player\StorePlayerAction;

class PlayerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function register(): Renderable
    {
        $title = '会員登録';
        $endpoint = route('player.post');
        $method = 'POST';

        return view('front::pages.player.register', compact('title','endpoint','method'));
    }

    /**
     * Store a newly created resource in storage.
     * @param StorePlayerRequest $request
     * @return RedirectResponse
     */
    public function post(StorePlayerRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
            $player = (new StorePlayerAction())($request);

        } catch (ValidationException $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($e->getMessage());
        }

        return redirect()
            ->route('player.mypage', ['player' => $player]);
    }

    /**
     * Show the specified resource.
     * @param Player $player
     * @return Renderable
     */
    public function mypage(Player $player): Renderable
    {
        $title = 'マイページ';

        $player_details = [
            [
                'name' => '名前',
                'value' => $player->name . '('. $player->kana .')',
            ],
            [
                'name' => '住所',
                'value' => '〒' . $player->postal_code . '&nbsp;' . $player->address1
            ],
            [
                'name' => 'メールアドレス',
                'value' => $player->email
            ],
            [
                'name' => '電話番号',
                'value' => $player->phone_number
            ],
            [
                'name' => '大会参加回数',
                'value' => 0 . '回'
            ]
        ];

        return view('front::pages.player.mypage', compact('title','player', 'player_details'));
    }
}
