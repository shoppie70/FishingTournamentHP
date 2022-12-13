@extends('front::layouts.master')

@section('css')

@endsection

@section('content')
    {{ Breadcrumbs::render('news', $title) }}
    <article id="" class="pt-16 mb-20">
        <div class="w-full max-w-screen-xl mx-auto p-4">
            <div class="mb-12">
                @include('front::components.heading-main', ['main_title' => $news->title])
            </div>
            <p>
                {!! $news->content ?? '' !!}
            </p>
        </div>
    </article>
@endsection
