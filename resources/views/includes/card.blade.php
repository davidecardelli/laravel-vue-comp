<div class="col mb-3">
    <div class="card d-flex flex-column align-items-center justify-content-center h-100">
        <a href="{{ route('admin.killers.show', $killer['id']) }}">
            <img class="p-3 card-img-top" src="{{ $killer['picture'] }}" alt="{{ $killer['first_name'] }}">
        </a>
        <div class="card-body">
            <p class="text-center text-black mt-2 fw-bold text-uppercase">{{ $killer['first_name'] }}</p>
        </div>
    </div>
</div>
