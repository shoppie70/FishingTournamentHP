@extends('front::layouts.master')

@section('content')
    {{ Breadcrumbs::render('sponsor', $title) }}
    <section class="max-w-screen-lg mx-auto py-16">
        <h2 class="heading--underline mb-8">
             スポンサーリンク
        </h2>
        <p class="px-4">
            スポンサーの皆さまのホームページをリンクさせていただきます。<br>
        </p>
        <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
            @for($i = 0; $i < 8; ++$i)
                <li class="">
                    <img class="w-full block" src="https://placehold.jp/400x400.png?text=Photo" alt="">
                </li>
            @endfor
        </ul>
    </section>

@endsection
