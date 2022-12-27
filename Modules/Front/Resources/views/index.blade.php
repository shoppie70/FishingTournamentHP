@extends('front::layouts.master')

@section('content')
    <section id="about_us" class="pt-16 mb-4">
        <div class="mb-16">
            @include('front::components.heading-main', ['main_title' => 'ABOUT US', 'sub_title' => 'わたしたちについて'])
        </div>
        <div class="w-full max-w-screen-lg mx-auto">
            <div class="flex flex-wrap md:flex-nowrap">
                <div class="w-full md:w-1/2 px-4">
                    <h3 class="font-bold text-xl mb-4">
                        テキストが入ります
                    </h3>
                    <p class="leading-7">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>
                </div>
                <div class="w-full md:w-1/2 px-4 mt-4 md:mt-0">
                    <img class="rounded-lg mx-auto" src="https://placehold.jp/400x400.png?text=Photo" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="links" class="mb-20">
        <div class="max-w-screen-lg mx-auto">
            <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
                @foreach($page_links as $page_link)
                    <li class="bg-orange-50 border rounded shadow w-full text-center">
                        <a href="{{ $page_link['path'] }}" class="pt-6 p-4 block">
                            <img class="block mx-auto mb-2" style="max-width: 50px" src="{{ $page_link['image'] }}"
                                 alt="{{ $page_link['title'] }}">
                            <h2 class="font-bold">
                                {{ $page_link['title'] }}
                            </h2>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section id="topics" class="mb-20 px-4">
        <div class="mb-12">
            @include('front::components.heading-main', ['main_title' => 'TOPICS', 'sub_title' => 'お知らせ'])
        </div>
        <div class="max-w-screen-md mx-auto w-full">
            <ul class="border py-4 px-6 rounded shadow-lg">
                @foreach($news_items as $news_item)
                    <li class="py-4">
                        <article class="flex flex-wrap items-center md:flex-nowrap">
                            <time datetime="{{ $news_item->created_at->format('Y-m-d') }}"
                                  class="rounded bg-blue-400 text-white font-bold py-1 px-2 text-sm">
                                {{ $news_item->created_at->format('Y.m.d') }}
                            </time>
                            <h1 class="ml-4">
                                <a href="{{ route('news.show',['news' => $news_item]) }}" class="underline">
                                    {{ $news_item->title }}
                                </a>
                            </h1>
                        </article>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <section id="topics" class="mb-20 px-4">
        <div class="mb-12">
            @include('front::components.heading-main', ['main_title' => 'EVENT', 'sub_title' => 'イベント情報'])
        </div>
        <div class="max-w-screen-xl mx-auto w-full">
            <div class="flex flex-wrap md:flex-nowrap">
                <div class="w-full md:w-3/5 md:mr-4">
                    <article class="flex flex-wrap items-start md:flex-nowrap border py-4 px-6 rounded shadow-lg">
                        <div class="w-full md:w-1/3 md:mr-4">
                            <img class="rounded-lg" src="https://placehold.jp/400x500.png?text=Photo" alt="">
                        </div>
                        <div class="w-full md:w-2/3">
                            <h1 class="font-bold text-xl md:text-3xl my-2">
                                下津井沖磯頂上決戦
                            </h1>
                            <div class="flex mb-4">
                                <time datetime=""
                                      class="rounded bg-red-400 text-white font-bold py-1 px-2 text-sm inline-block mr-2">
                                    2022.12.24
                                </time>
                                <div class="rounded bg-lime-500 text-white font-bold py-1 px-2 text-sm inline-block">
                                    下津井エリア
                                </div>
                            </div>
                            <p>
                                大会の内容が入ります。大会の内容が入ります。大会の内容が入ります。大会の内容が入ります。
                                大会の内容が入ります。大会の内容が入ります。大会の内容が入ります。大会の内容が入ります。
                                大会の内容が入ります。大会の内容が入ります。大会の内容が入ります。大会の内容が入ります。
                            </p>
                        </div>
                    </article>
                </div>
                <div class="w-full md:w-2/5 md:mr-4 mt-4 md:mt-0">
                    <article class="border py-4 px-6 rounded shadow-lg mb-4 md:mb-0">
                        <h1 class="font-bold text-xl md:text-3xl my-2 flex items-center">
                            秋の磯釣り大会 <span
                                class="ml-4 rounded bg-red-600 text-white font-bold py-1 px-2 text-xs inline-block">開催済み</span>
                        </h1>
                        <div class="flex mb-4">
                            <time datetime=""
                                  class="rounded bg-red-400 text-white font-bold py-1 px-2 text-sm inline-block mr-2">
                                2022.12.24
                            </time>
                            <div class="rounded bg-lime-500 text-white font-bold py-1 px-2 text-sm inline-block">
                                下津井エリア
                            </div>
                        </div>
                        <p>
                            <a href="">
                                大会結果は<span class="border-b border-black">こちら</span>から
                            </a>
                        </p>
                    </article>
                    <article class="border py-4 px-6 rounded shadow-lg">
                        <h1 class="font-bold text-xl md:text-3xl my-2 flex items-center">
                            真鯛王座決定戦 <span
                                class="ml-4 rounded bg-red-600 text-white font-bold py-1 px-2 text-xs inline-block">開催済み</span>
                        </h1>
                        <div class="flex mb-4">
                            <time datetime=""
                                  class="rounded bg-red-400 text-white font-bold py-1 px-2 text-sm inline-block mr-2">
                                2022.12.24
                            </time>
                            <div class="rounded bg-lime-500 text-white font-bold py-1 px-2 text-sm inline-block">
                                下津井エリア
                            </div>
                        </div>
                        <p>
                            <a href="">
                                大会結果は<span class="border-b border-black">こちら</span>から
                            </a>
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
