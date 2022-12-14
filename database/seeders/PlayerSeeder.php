<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::truncate();

        $member_data = [];
        for ($i = 1; $i <= 10; $i++) {
            $member_data[] = [
                'name' => sprintf('会員%02d', $i),
                'kana' => sprintf('かいいん%02d', $i),
                'postal_code' => sprintf('700-041%02d', $i),
                'address1' => sprintf('%02d', $i),
                'email' => sprintf('member%02d@example.com', $i),
                'password' => sprintf('pass%04d', $i),
            ];
        }

        foreach($member_data as $data) {
            $player = new Player();
            $player->name = $data['name'];
            $player->kana = $data['kana'];
            $player->postal_code = $data['postal_code'];
            $player->address1 = $data['address1'];
            $player->email = $data['email'];
            $player->password = Hash::make($data['password']);
            $player->save();
        }
    }
}
