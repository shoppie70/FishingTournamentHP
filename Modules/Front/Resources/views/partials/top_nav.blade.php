<div class="w-full p-4 fixed top-0 left-0 transition duration-150 ease-out" id="top_nav">
    <div class="flex justify-between">
        <a href="{{ route('index') }}">
            {{ config('app.name') }}
        </a>
        <ul class="hidden md:flex">
            @php($top_navs = config('front.top_nav'))
            @foreach($top_navs as $top_nav)
                <li class="py-2 px-4 hover:border-b border-black">
                    <a href="{{ Route::has($top_nav['path']) ? route($top_nav['path']) : '' }}">
                        {{ $top_nav['title'] }}
                    </a>
                </li>
            @endforeach
            @auth
                <li class="p-2">
                    <a class="rounded bg-blue-300 py-2 px-4"
                       href="{{ route('player.mypage', ['player' => Auth::guard('player')->user()]) }}">
                        会員ページ
                    </a>
                </li>
            @endauth
            @guest
                <li class="p-2">
                    <a class="rounded bg-blue-300 py-2 px-4" href="{{ route('player.login.index') }}">
                        ログイン
                    </a>
                </li>
            @endguest
        </ul>
    </div>
</div>
