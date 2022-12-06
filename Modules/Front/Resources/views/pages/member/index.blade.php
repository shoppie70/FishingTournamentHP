@extends('front::layouts.master')

@section('js')
    <script>
        const elems = document.querySelectorAll('[hovercolor]');
        const member_blocks = document.querySelectorAll('.member-block');
        let hover_color = '#3d8cde';

        const isMobileDevice = () => {
            return window.matchMedia && window.matchMedia('(max-device-width: 961px)').matches;
        }

        const getRandomColor = () => {
            const colorArray = [
                "#3d8cde",
                "#ff3363",
                "#ed1c0d",
                "#ed7300",
                "#663382",
                "#87c70f",
                "#00c9bf",
                "#663382",
                "#663382",
            ];
            return colorArray[Math.floor(Math.random() * colorArray.length)];
        }

        window.addEventListener('load', () => {
            member_blocks.forEach((e) => {
                let hover_element = e.querySelector('[hovercolor]');

                if (isMobileDevice()) {
                    e.addEventListener('mouseover', () => {
                        hover_element.style.backgroundColor = hover_color;
                    });
                }

                e.addEventListener('mouseleave', () => {
                    hover_color = getRandomColor();

                    if (isMobileDevice()) {
                        hover_element.style.backgroundColor = "";
                    }
                });

            });

            elems.forEach((e) => {

                e.addEventListener('mouseover', () => {
                    e.style.backgroundColor = hover_color;
                });

                e.addEventListener('mouseout', () => {
                    e.style.backgroundColor = "";
                });

            });
        });
    </script>
@endsection


@section('content')
    {{ Breadcrumbs::render('member', $title) }}
    <section class="pt-16 mb-20">
        <div class="mb-16">
            @include('front::components.heading-main', ['main_title' => 'MEMBER', 'sub_title' => 'メンバー紹介'])
        </div>
        <div class="bg-gray-100 py-8 px-8 md:px-4">
            <ul class="max-w-screen-lg mx-auto md:px-4 flex flex-wrap">
                @for($i = 1; $i <= 3; ++$i)
                    <li class="w-full md:w-1/3 md:p-4 mb-32 md:mb-16">
                        <article class="member-block">
                            <figure>
                                <img class="aspect-square object-cover"
                                     src="{{ asset('assets/front/img/member/member' . $i . '.jpg') }}" alt="">
                            </figure>
                            <section class="p-4 bg-white member-info" hovercolor="">
                                <h1 class="font-bold">
                                    {{ config('about_us.boss_name') }}
                                </h1>
                                <p class="text-gray-400 text-sm">
                                    前田杯会長,YouTuber
                                </p>
                                <p class="member-info__detail">
                                    プロフィール説明文が入ります。
                                    プロフィール説明文が入ります。
                                    プロフィール説明文が入ります。
                                    プロフィール説明文が入ります。
                                </p>
                            </section>
                        </article>
                    </li>
                @endfor
            </ul>
        </div>
    </section>
@endsection
