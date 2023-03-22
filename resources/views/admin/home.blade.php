@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>Pannello di controllo</h2>
        <a href="{{ route('admin.killers.index') }}" class="btn btn-primary">Gestisci i killers</a>
    </div>
@endsection
