<div class="w-full bg-black text-white pt-16 pb-4">
    <div class="flex justify-between max-w-screen-lg mx-auto mb-8">
        <div class="">
            <a href="{{ route('index') }}">
                {{ config('app.name') }}
            </a>
        </div>
        @php($footer_navs = config('front.footer_nav'))
        @foreach($footer_navs as $footer_nav)
            <ul>
                @foreach($footer_nav as $footer_nav_item)
                    <li class="py-2 px-4 hover:border-b border-black">
                        <a href="{{ $footer_nav_item['path'] }}">
                            {{ $footer_nav_item['title'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </div>
    <small class="block text-center">
        Copyright {{{ config('app.name') }}}. All Right Reserved.
    </small>
</div>

