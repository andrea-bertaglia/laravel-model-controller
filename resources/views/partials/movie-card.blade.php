{{-- card con papera placeholder --}}
{{-- <div class="card" style="width: 18rem;">
    <img class="w-100" src="{{ Vite::asset('resources/img/duck.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <div class="card-text">
            <h5 class="fw-bold">Titolo</h5>
            <small>Titolo originale</small>
            <ul class="list-group list-group-flush pt-4">
                <li class="list-group-item">nazione</li>
                <li class="list-group-item">data</li>
                <li class="list-group-item">voto</li>
            </ul>
        </div>
    </div>
</div> --}}

{{-- card dinamica --}}
<div class="card h-100" style="width: 18rem;">
    <img class="w-100" src="{{ $movie['image'] }}" class="card-img-top" alt="...">
    <div class="card-body">
        <div class="card-text">
            <h5 class="fw-bold">{{ $movie['title'] }}</h5>
            <small>{{ $movie['original_title'] }}</small>
            <ul class="list-group list-group-flush pt-4">
                <li class="list-group-item">Nazionalità: <span class="fw-bold">{{ $movie['nationality'] }}</span></li>
                <li class="list-group-item">Data: <span class="fw-bold">{{ $movie['date'] }}</span></li>
                <li class="list-group-item">Voto: <span class="fw-bold">{{ $movie['vote'] }}</span></li>
                </li>
            </ul>
        </div>
    </div>
</div>
