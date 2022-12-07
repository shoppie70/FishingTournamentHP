@component('mail::message')
{{ $request->name }}様,
お問い合わせをありがとうございました。
以下、送信された内容の確認になります。

@component('mail::panel')
    ※本メールは、自動的に配信しています。<br>
    こちらのメールは送信専用のため、直接ご返信いただいてもお問い合わせにはお答えできませんので、あらかじめご了承ください。
@endcomponent

@component('mail::table')
    |   送信内容 |    |
    | ---- | ---- |
    |  お問い合わせ内容  |  {{ $request->content }}  |
    |  貴社名  |  {{ $request->company_name ?? '' }}  |
    |  住所  |  {{ $request->postal_code ?? '' . $request->address ?? '' }}  |
    |  お名前  |  {{ $request->name }}  |
    |  電話番号  |  {{ $request->tel ?? '' }}  |
    |  メールアドレス  |  {{ $request->email ?? '' }}  |
    |  お問い合わせ内容  |  {{$request->note ?? '' }}  |
@endcomponent

@endcomponent

