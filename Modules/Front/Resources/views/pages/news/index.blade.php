@extends('front::layouts.master')

@section('css')
    <style>
        .news-item {
            border-bottom: 2px dashed #ccc;
        }
    </style>
@endsection

@section('content')
    {{ Breadcrumbs::render('news', $title) }}
    <section id="" class="pt-16 mb-20">
        <div class="w-full max-w-screen-xl mx-auto p-4">
            <div class="mb-12">
                @include('front::components.heading-main', ['main_title' => $title, 'sub_title' => $sub_title])
            </div>
            <ul class="rounded mx-auto bg-gray-100 py-4 px-4 md:px-8">
                @for($i = 0; $i < 8; ++$i)
                    <li class="news-item py-4">
                        <article class="flex items-center flex-wrap">
                            <time datetime="" class="md:mr-4 block bg-blue-400 text-white text-sm rounded py-1 px-2 mb-2 md:mb-0">
                                2022.12.24
                            </time>
                            <h1>
                                <a href="">
                                    タイトルが入ります。タイトルが入ります。タイトルが入ります。
                                </a>
                            </h1>
                        </article>
                    </li>
                @endfor
            </ul>
        </div>
    </section>
@endsection
