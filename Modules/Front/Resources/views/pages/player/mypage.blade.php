@extends('front::layouts.master')

@section('content')
    {{ Breadcrumbs::render('mypage', $player) }}
    <section id="about_us" class="pt-16 mb-4 px-4">
        <div class="mb-8">
            <div class="mb-16">
                @include('front::components.heading-main', ['main_title' => 'MYPAGE', 'sub_title' => 'マイページ'])
            </div>
        </div>
        <div class="flex flex-wrap flex-col-reverse md:flex-row md:flex-nowrap max-w-screen-lg mx-auto">
            <div class="w-full md:w-8/12 md:mr-8">
                <h2 class="font-bold text-xl mb-4 pb-1 border-b">
                    大会情報
                </h2>
                @for($i = 0; $i < 5; ++$i)
                    <div class="rounded bg-gray-100 p-4 mb-8">
                        <h2 class="font-bold text-lg mb-4 pb-1 border-b">
                            秋の磯釣り大会
                        </h2>
                        <p>
                            大会の説明が入ります。大会の説明が入ります。大会の説明が入ります。
                            大会の説明が入ります。大会の説明が入ります。大会の説明が入ります。
                            大会の説明が入ります。大会の説明が入ります。大会の説明が入ります。
                            大会の説明が入ります。大会の説明が入ります。大会の説明が入ります。
                            大会の説明が入ります。大会の説明が入ります。大会の説明が入ります。
                        </p>
                    </div>
                @endfor
            </div>
            <div class="w-full md:w-4/12 mb-8 md:mb-0">
                <div class="rounded bg-gray-100 p-4">
                    <h2 class="font-bold text-lg mb-4 pb-1 border-b">
                        会員情報
                    </h2>
                    <div class="pb-4">
                        @foreach($player_details as $player_detail)
                            <dl class="mb-4 border-b">
                                <dt class="font-bold">
                                    {{ $player_detail['name'] }}
                                </dt>
                                <dd>
                                    {!! $player_detail['value'] ?? '-' !!}
                                </dd>
                            </dl>
                        @endforeach
                    </div>
                    <div class="text-center pb-4">
                        <a class="block bg-blue-400 text-white rounded py-2 px-3 mb-2" href="{{ route('player.edit',['player' => $player]) }}">
                            会員情報を編集する
                        </a>
                        <a class="block bg-red-400 text-white rounded py-2 px-3" href="{{ route('player.logout') }}">
                            ログアウトする
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
