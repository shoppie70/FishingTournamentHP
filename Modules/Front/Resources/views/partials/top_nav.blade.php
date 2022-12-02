<div class="w-full p-4 fixed top-0 left-0">
    <div class="flex justify-between">
        <a href="{{ route('index') }}">
            {{ config('app.name') }}
        </a>
        <ul class="flex">
            @php($top_navs = config('front.top_nav'))
            @foreach($top_navs as $top_nav)
                <li class="py-2 px-4 hover:border-b border-black">
                    <a href="{{ $top_nav['path'] }}">
                        {{ $top_nav['title'] }}
                    </a>
                </li>
            @endforeach
            <li class="p-2">
                <a class="rounded bg-blue-300 py-2 px-4" href="">
                    会員ページ
                </a>
            </li>
        </ul>
    </div>
</div>