@extends('front::layouts.master')

@section('content')
    {{ Breadcrumbs::render('about_us', $title) }}
    <section id="about_us" class="pt-16 mb-20">
        <div class="w-full max-w-screen-md mx-auto">
            <h2 class="heading--underline">
                {{ $title }}
            </h2>
            <p class="leading-7 mb-16">
                前田杯を運営する「前田杯実行委員会」は収益事業を営まない任意団体です。<br>
                大会の参加費や寄付によって活動が成り立っております。<br>
                メーカーやプロでは無い素人の僕たちにしか出来ないようなこと〜〜〜
            </p>
            <h2 class="heading--underline">
                お問い合わせ
            </h2>
            <p class="mb-12 md:text-center">
                大会の協賛や寄付について、随時募集をしております。<br>
                以下のボタンからお問い合わせフォームへアクセス可能です。
            </p>
            <div class="max-w-screen-sm mx-auto bg-blue-400 text-white rounded text-center text-2xl font-bold">
                <a class="p-4 flex items-center justify-center" href="{{ route('donation.form.index') }}">
                    <svg class="mr-4" id="_x32_" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                         style="width: 32px; height: 32px; opacity: 1;" xml:space="preserve">
                            <g>
                                <path class="st0" d="M490.237,90.753c-13.382-13.412-32.076-21.764-52.532-21.756H74.295C33.258,69.012,0.015,102.247,0,143.284
                            v225.432c0.015,41.036,33.258,74.272,74.295,74.286h363.41c20.456,0.008,39.15-8.344,52.532-21.755
                            C503.648,407.866,512,389.171,512,368.716V143.284C512,122.829,503.648,104.135,490.237,90.753z M74.295,107.04h363.41
                            c8.701,0.008,16.466,3.136,22.714,8.21L256,269.478L51.58,115.25C57.829,110.175,65.594,107.047,74.295,107.04z M38.042,368.716
                            V143.284c0.016-5.826,1.486-11.205,3.894-16.05l141.813,129.998L41.55,384.044C39.365,379.393,38.058,374.252,38.042,368.716z
                             M437.705,404.96H74.295c-8.204-0.007-15.581-2.771-21.637-7.319l150.618-121.825l22.818,21.711
                            c16.911,15.529,42.902,15.529,59.813,0l22.818-21.711l150.61,121.825C453.279,402.189,445.901,404.953,437.705,404.96z
                             M473.958,368.716c-0.016,5.535-1.322,10.677-3.508,15.328L328.251,257.233l141.805-129.998c2.415,4.844,3.886,10.217,3.901,16.05
                            V368.716z" style="fill: rgb(255, 255, 255);"></path>
                            </g>
                        </svg>
                    お問い合わせフォームはこちら
                </a>
            </div>
        </div>
    </section>
    <section class="max-w-screen-lg mx-auto pb-16">
        <h2 class="heading--underline">
            実績
        </h2>
        <p>
            このような形で、協賛してくださったスポンサー様方を広告させて頂いております。<br>
            ご希望の掲載方法を承ります！
        </p>
        <ul class="grid grid-cols-2 md:grid-cols-4 gap-4 p-4">
            @for($i = 0; $i < 8; ++$i)
                <li class="">
                    <img class="w-full block" src="https://placehold.jp/400x400.png?text=Photo" alt="">
                </li>
            @endfor
        </ul>
    </section>

@endsection
