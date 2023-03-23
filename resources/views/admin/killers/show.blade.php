@extends('layouts.app')

@section('content')
    <main class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img class="img-fluid" src="{{ asset('storage/' . $killer['picture']) }}"
                        alt="{{ $killer['first_name'] }}">
                </div>
                <div class="col-8">
                    <h1>{{ $killer['first_name'] . ' ' . $killer['last_name'] }}</h1>
                    <div>
                        Age: {{ $killer['age'] }}
                    </div>
                    <div>
                        Kills: {{ $killer['kills'] }}
                    </div>
                    <div>
                        Wanted: {{ $killer['kills'] ? 'WANTED' : 'ARRESTED' }}
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <form action="{{ route('admin.killers.destroy', $killer->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger me-2">Elimina</button>
                    </form>
                    <a href="{{ route('admin.killers.edit', $killer->id) }}"
                        class="btn btn-sm btn-warning me-2">Modifica</a>
                    <a href="{{ route('admin.killers.index') }}" class="btn btn-sm btn-secondary">Indietro</a>
                </div>

            </div>
    </main>
@endsection
