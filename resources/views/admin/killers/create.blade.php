@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <h2 class="text-center mb-5">Aggiungi Kilers</h2>
            @include('includes.killers.form')
        </div>
    </main>
@endsection
