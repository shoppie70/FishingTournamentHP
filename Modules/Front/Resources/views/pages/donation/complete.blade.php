@extends('front::layouts.master')

@section('content')
    {{ Breadcrumbs::render('donation') }}
    <section id="about_us" class="pt-16 mb-20">
        <div class="w-full max-w-screen-md mx-auto">
            <h2 class="heading--underline">
                {{ $title }}
            </h2>
            <p class="leading-7 mb-16">
                寄付・協賛に関するお問い合わせをありがとうございました。<br>
                こちらから自動返信メールを送らせて頂きましたのでご確認くださいませ。
            </p>
        </div>
    </section>
@endsection