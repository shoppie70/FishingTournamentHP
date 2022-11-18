@extends('front::layouts.master')

@section('content')
    <h1 class="text-red-400">Hello World</h1>

    <p>
        This view is loaded from module: {!! config('front.name') !!}
    </p>
@endsection
