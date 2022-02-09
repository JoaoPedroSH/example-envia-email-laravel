@component('mail::message')
<h1>Vamos ver!!!</h1>

@component('mail::button', ['url' => 'https://upee.com.br'])
    Só bora!
@endcomponent

<p>O email funcionou {{ $user->name }}...</p>
@endcomponent