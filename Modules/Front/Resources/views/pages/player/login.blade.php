@extends('front::layouts.master')

@section('content')
    {{ Breadcrumbs::render('login') }}
    <section id="" class="pt-16 mb-4 px-4">
        <div class="mb-8">
            <div class="mb-16">
                @include('front::components.heading-main', ['main_title' => 'LOGIN', 'sub_title' => '会員ログイン'])
            </div>
        </div>
        <div class="flex flex-wrap md:flex-nowrap max-w-screen-md mx-auto mb-16">
            @include('front::components.form.error')
            <div class="w-full sm:max-w-lg mx-auto p-6 bg-gray-100 overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{ route('player.login.post') }}">
                    @csrf
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            メールアドレス
                        </label>
                        <input
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                            id="email" type="text" name="email" required="required" autofocus="autofocus">
                    </div>
                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            パスワード
                        </label>
                        <input
                            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                            id="password" type="password" name="password" required="required"
                            autocomplete="current-password">
                    </div>
                    <div class="flex items-center justify-between mt-4">
{{--                        <div>--}}
{{--                            <a class="underline text-sm text-gray-600 hover:text-gray-900"--}}
{{--                               href="">--}}
{{--                                パスワードを忘れた方はこちら--}}
{{--                            </a>--}}
{{--                        </div>--}}
                        <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">
                            ログイン
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
