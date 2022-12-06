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
