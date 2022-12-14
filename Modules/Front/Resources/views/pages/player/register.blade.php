@extends('front::layouts.master')

@section('js')
    <script src="//yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
@endsection

@section('content')
    {{ Breadcrumbs::render('player', $title) }}
    <section id="about_us" class="pt-16 mb-4 px-4">
        <div class="mb-8">
            <div class="mb-16">
                @include('front::components.heading-main', ['main_title' => 'REGISTER', 'sub_title' => '会員登録'])
            </div>
            <p class="max-w-screen-md mx-auto px-4">
                会員登録をしていただけますと、大会へのエントリーでの情報入力が簡単になります！<br>
                また、マイページから参加大会の結果等がご覧になれます。
            </p>
        </div>
        <div class="w-full max-w-screen-md mx-auto">
            @include('front::components.form.error')

            <form action="{{ $endpoint }}" method="{{ $method }}" class="h-adr">
                @csrf
                <div class="bg-gray-100 rounded-lg p-4 md:p-16 mb-8">
                    <span class="p-country-name" style="display:none;">Japan</span>
                    <dl class="form__dl">
                        <dt class="form__dt">
                            <span class="font-bold">お名前</span>
                            <span class="form__required">必須</span>
                        </dt>
                        <dd class="form__dd">
                            @include('front::components.form.input-text', [
                                'name' => 'name',
                                'placeholder' => '例）岡山　太郎',
                                'value' => old('name') ?? '',
                                'required' => true,
                            ])
                        </dd>
                    </dl>
                    <dl class="form__dl">
                        <dt class="form__dt">
                            <span class="font-bold">ふりがな</span>
                            <span class="form__required">必須</span>
                        </dt>
                        <dd class="form__dd">
                            @include('front::components.form.input-text', [
                                'name' => 'kana',
                                'placeholder' => '例）おかやま　たろう',
                                'value' => old('kana') ?? '',
                                'required' => true,
                            ])
                        </dd>
                    </dl>
                    <dl class="form__dl">
                        <dt class="form__dt">
                        <span class="font-bold">
                            住所
                        </span>
                        </dt>
                        <dd class="form__dd">
                            <div class="mb-4">
                                <div class="flex items-center w-5/12">
                                    <div class="mr-4">
                                        〒
                                    </div>
                                    @include('front::components.form.input-zip', [
                                        'name' => 'postal_code',
                                        'value' => old('postal_code') ?? '',
                                    ])
                                </div>
                            </div>
                            <div>
                                @include('front::components.form.input-address', [
                                    'name' => 'address1',
                                    'value' => old('address1') ?? '',
                                    'placeholder' => '※ 郵便番号を入れて頂くと自動入力されます。',
                                ])
                            </div>
                        </dd>
                    </dl>
                    <dl class="form__dl">
                        <dt class="form__dt">
                            <span class="font-bold">メールアドレス</span>
                            <span class="form__required">必須</span>
                        </dt>
                        <dd class="form__dd">
                            @include('front::components.form.input-text', [
                                'name' => 'email',
                                'placeholder' => '例）岡山　太郎',
                                'value' => old('email') ?? '',
                                'required' => true,
                            ])
                        </dd>
                    </dl>
                    <dl class="form__dl">
                        <dt class="form__dt">
                            <span class="font-bold">電話番号</span>
                        </dt>
                        <dd class="form__dd">
                            @include('front::components.form.input-text', [
                                'name' => 'phone_number',
                                'placeholder' => '例）岡山　太郎',
                                'value' => old('phone_number') ?? '',
                                'required' => false,
                            ])
                        </dd>
                    </dl>
                    <dl class="form__dl">
                        <dt class="form__dt">
                            <span class="font-bold">パスワード</span>
                        </dt>
                        <dd class="form__dd">
                            @include('front::components.form.input-password', [
                                'name' => 'password',
                                'placeholder' => '',
                                'value' => old('password') ?? '',
                                'required' => true,
                            ])
                        </dd>
                    </dl>
                    <dl class="form__dl">
                        <dt class="form__dt">
                            <span class="font-bold">パスワード(確認)</span>
                        </dt>
                        <dd class="form__dd">
                            @include('front::components.form.input-password', [
                                'name' => 'password_confirmed',
                                'placeholder' => '',
                                'value' => old('password_confirmed') ?? '',
                                'required' => true,
                            ])
                        </dd>
                    </dl>
                </div>
                <div class="bg-gray-100 rounded-lg p-4 md:p-16">
                    <h2 class="text-center font-bold text-xl mb-8 mt-8 md:mt-0">
                        個人情報の取扱いについて
                    </h2>
                    <ul class="text-sm mb-4 bg-white p-4 md:p-8">
                        <li class="mb-2">
                            ・住所 / メールアドレスは大会情報のお届けで使用いたします。
                        </li>
                        <li class="mb-2">
                            ・電話番号は大会中のトラブル対応の目的で使用いたします。
                        </li>
                        <li>
                            ・大会中に撮影した動画や写真は、今後の運営で使用させていただくことがあります。
                        </li>
                    </ul>
                    <p class="text-sm">
                        ※ 上記以外の目的で個人情報を使うことはございません。<br>
                        ※ 当団体のプライバシーポリシーは<a class="font-bold" href="{{ route('privacy_policy') }}">コチラ</a>から確認できます。
                    </p>
                </div>
                <div class="p-4 md:p-8">
                    <label for="is_checked_privacy_policy" class="flex w-full justify-center items-center mb-8">
                        <input class="mr-4" type="checkbox" name="is_checked_privacy_policy"
                               id="is_checked_privacy_policy" required>
                        個人情報の取扱いについて同意する。
                    </label>
                    <button type="submit"
                            class="block px-16 py-4 mx-auto font-bold rounded text-white bg-blue-400 cursor-pointer">
                        会員登録する
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
