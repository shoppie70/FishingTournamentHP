@if(Route::is('index'))
    <div class="h-screen bg-blue-100 flex justify-center items-center bg-center bg-cover bg-no-repeat"
         style="background-image:url('{{ asset('assets/front/img/hero.jpg') }}')">
        <div>
            <h1 class="text-3xl md:text-4xl font-bold px-4 text-white">
                メッセージが入ります。
            </h1>
        </div>
    </div>
@else
    <div class="flex justify-center items-center bg-blue-200 bg-center bg-cover bg-no-repeat py-32"
         style="background-image: url('{{ $hero_image_path ?? '' }}')">
        <div class="text-center">
            <h1 class="text-3xl md:text-4xl font-bold px-4 text-white">
                {{ $title ?? '' }}
            </h1>
            <p class="text-white font-bold">
                {{ $sub_title ?? '' }}
            </p>
        </div>
    </div>
@endif
　
