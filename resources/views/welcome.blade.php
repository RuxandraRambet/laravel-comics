@extends ('layouts.main')

@section('main')
    <div class="jumbo"></div>

    <div class="cards-section">
        <div class="container">
            <h3 class="text-uppercase text-white">current series</h3>
            <ul class="comic-cards d-flex flex-wrap">
                @foreach ($comics as $comic)
                    <li class="comic-card">
                        <a href="#"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}"></a>
                        <h5 class="text-uppercase text-white">{{ $comic['series'] }}</h5>
                    </li>
                @endforeach
            </ul>
            <div class="button-container">
                <button class="text-uppercase">load more</button>
            </div>
        </div>
    </div>
@endsection
