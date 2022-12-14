<?php
// Home
use Diglactic\Breadcrumbs\Breadcrumbs;

Breadcrumbs::for('home', static function ($trail) {
    $trail->push('トップページ', route('index'));
});

Breadcrumbs::for('about_us', static function ($trail, $title) {
    $trail->parent('home');
    $trail->push($title, route('about_us'));
});

Breadcrumbs::for('member', static function ($trail, $title) {
    $trail->parent('home');
    $trail->push($title, route('member'));
});

Breadcrumbs::for('player', static function ($trail, $title) {
    $trail->parent('home');
    $trail->push('会員登録', route('player.register'));
});

Breadcrumbs::for('login', static function ($trail) {
    $trail->parent('home');
    $trail->push('ログイン', route('player.login.index'));
});

Breadcrumbs::for('mypage', static function ($trail, $player) {
    $trail->parent('home');
    $trail->push('マイページ', route('player.mypage',['player' => $player]));
});


Breadcrumbs::for('sponsor', static function ($trail, $title) {
    $trail->parent('home');
    $trail->push($title, route('sponsor'));
});

Breadcrumbs::for('privacy_policy', static function ($trail, $title) {
    $trail->parent('home');
    $trail->push($title, route('privacy_policy'));
});

Breadcrumbs::for('donation', static function ($trail) {
    $trail->parent('home');
    $trail->push('寄付・協賛について', route('donation.index'));
    $trail->push('寄付・協賛のお問い合わせ', route('donation.form.index'));
});

Breadcrumbs::for('contact', static function ($trail) {
    $trail->parent('home');
    $trail->push('お問い合わせ', route('contact.index'));
});

Breadcrumbs::for('news', static function ($trail) {
    $trail->parent('home');
    $trail->push('お知らせ', route('news.index'));
});
