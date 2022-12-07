@component('mail::message')
{{ $request->name }}様より、
寄付・協賛に関するお問い合わせがありました。
以下、内容になります。

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
