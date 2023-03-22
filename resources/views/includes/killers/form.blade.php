@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($killer->exists)
    <form action="{{ route('admin.killers.update', $killer->id) }}" method="POST" enctype="multipart/form-data"
        novalidate>
        @method('PUT')
    @else
        <form action="{{ route('admin.killers.store') }}" method="POST" enctype="multipart/form-data" novalidate>
@endif
@csrf
<div class="row cols-3">
    <div class="col">
        {{-- First Name --}}
        <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"
                value="{{ old('first_name', $killer->first_name) }}">
        </div>
    </div>

    <div class="col">
        {{-- Last Name --}}
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"
                value="{{ old('last_name', $killer->last_name) }}">
        </div>
    </div>

    <div class="col">
        {{-- Age --}}
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age" placeholder="Age"
                value="{{ old('age', $killer->age) }}">
        </div>
    </div>
</div>

<div class="row row-cols-2">
    <div class="col">
        {{-- Kills --}}
        <div class="mb-3">
            <label for="kills" class="form-label">Kills</label>
            <input type="number" class="form-control" id="kills" name="kills" placeholder="Kills"
                value="{{ old('kills', $killer->kills) }}">
        </div>
    </div>

    <div class="col">
        {{-- Wanted --}}
        <div class="mb-3">
            <label for="wanted" class="form-label">Wanted</label>
            <select class="form-control" id="wanted" name="wanted">
                <option value="">-</option>
                <option value="0" @if ($killer->wanted === 0) selected @endif>Arrested</option>
                <option value="1" @if ($killer->wanted === 1) selected @endif>Wanted</option>
            </select>
        </div>
    </div>
</div>

<div class="row row-cols-1">
    <div class="col">
        {{-- Image URL --}}
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" class="form-control" id="picture" name="picture" placeholder="Picture"
                value="{{ old('picture', $killer->picture) }}">
        </div>
    </div>
</div>

<div class="d-flex justify-content-between">
    <div>
        <a href="{{ route('admin.killers.index') }}" class="btn btn-secondary mt-3">Indietro</a>
    </div>
    <div class="mb-3">
        <button class="btn btn-small btn-success" type="submit">Salva</button>
    </div>
</div>
</form>
