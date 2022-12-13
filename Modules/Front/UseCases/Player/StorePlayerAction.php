<?php

namespace Modules\Front\UseCases\Player;

use App\Models\Player;
use Modules\Front\Http\Requests\StorePlayerRequest;

class StorePlayerAction
{
    public function __invoke(StorePlayerRequest $request): Player
    {
        $player_exists = Player::query()
            ->where('name', $request->get('name'))
            ->where('kana', $request->get('kana'))
            ->where('email', $request->get('email'))
            ->exists();

        if($player_exists) {
            throw new \RuntimeException('既に同情報の会員の方が登録されています。');
        }

        $player = new Player();

        $player->fill($request->all());
        $player->save();

        return $player;
    }
}
