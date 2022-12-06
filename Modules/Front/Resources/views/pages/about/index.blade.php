@extends('front::layouts.master')

@section('content')
    {{ Breadcrumbs::render('about_us', $title) }}
    <section id="about_us" class="pt-16 mb-20">
        <div class="w-full max-w-screen-lg mx-auto">
            <div class="flex flex-wrap md:flex-nowrap flex-col-reverse md:flex-row">
                <div class="w-full md:w-1/2 px-4">
                    <h3 class="font-bold text-xl mb-4">
                        テキストが入ります
                    </h3>
                    <p class="leading-7 mb-6">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                    <p class="text-right">
                        代表&emsp;<span class="font-bold">{{ config('about_us.boss_name') }}</span>
                    </p>
                </div>
                <div class="w-full md:w-1/2 px-4 mt-4 md:mt-0 mb-4 md:mb-0">
                    <img class="rounded-lg mx-auto" src="https://placehold.jp/400x400.png?text=Photo" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="mb-16">
            @include('front::components.heading-main', ['main_title' => 'ACTIVITY', 'sub_title' => '活動内容'])
        </div>
        <ul class="max-w-screen-lg mx-auto px-4">
            @for($i = 0; $i < 5; ++$i)
                @php($isEven = ($i % 2) === 0)
                <li class="rounded shadow border mb-4 md:mb-12 py-8 md:py-4 px-4">
                    <div class="flex flex-wrap md:flex-nowrap {{ $isEven ? 'flex-row-reverse' : '' }}">
                        <img class="rounded-lg mx-auto w-full md:w-min mb-4 md:mb-0" src="https://placehold.jp/300x300.png?text=Photo" alt="">
                        <div class="{{ $isEven ? 'md:pr-4' : 'md:pl-4' }}">
                            <h2 class="font-bold text-xl mb-4 ">
                                活動内容タイトル
                            </h2>
                            <p>
                                活動内容が入ります。活動内容が入ります。活動内容が入ります。活動内容が入ります。
                                活動内容が入ります。活動内容が入ります。活動内容が入ります。活動内容が入ります。
                                活動内容が入ります。活動内容が入ります。活動内容が入ります。活動内容が入ります。
                                活動内容が入ります。活動内容が入ります。活動内容が入ります。活動内容が入ります。
                            </p>
                        </div>
                    </div>
                </li>
            @endfor
        </ul>
    </section>
@endsection
