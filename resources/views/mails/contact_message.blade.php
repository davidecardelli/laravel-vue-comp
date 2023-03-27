<x-mail::message>
    <h1>Nuovo messaggio ricevuto!</h1>
    <h2>Messaggio:</h2>
    <p>{{ $message }}</p>
    <p>Thanks,</p>


    {{ config('app.name') }}

</x-mail::message>
