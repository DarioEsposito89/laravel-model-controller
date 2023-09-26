@extends("layouts.public")

@section("content")
<div class="container">
    <div class="row">
            @forelse ($movies as $movie)
            <div class="card me-5 mb-5" style="width: 15rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                    <h6 class="">{{ $movie['original_title'] }}</h5>
                    <p class="card-text"> {{ $movie['nationality'] }}</p>
                    <span>
                        {{  $movie['date'] }}
                    </span>
                    <span>
                        {{  $movie['vote'] }}
                    </span>
                </div>
            </div>
            @empty
                <p>Mi disp non ci sono film da mostrare</p>
            @endforelse
    </div>
</div>
@endsection