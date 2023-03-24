<x-mail::message>
    # Nuovo messaggio ricevuto!

    ## Messaggio:
    <p>{{ $message }}</p>


    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
