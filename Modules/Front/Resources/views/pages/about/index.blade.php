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
@endsection
