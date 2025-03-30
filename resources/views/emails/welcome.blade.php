@component('mail::message')
# Добрый день, {{ $user->name }}!

Спасибо за регистрацию в нашем сервисе.

@component('mail::button', ['url' => url('/')])
Перейти на сайт
@endcomponent

С уважением,<br>
{{ config('app.name') }}
@endcomponent
