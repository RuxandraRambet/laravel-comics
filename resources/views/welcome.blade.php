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
    <div class="icons-section">
        <div class="container">
            <ul class="list-unstyled">
                <li>
                    <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital Comics"></a>
                    <h5 class="px-3">Digital Comics</h5>
                </li>
                <li>
                    <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="DC Merchandise"></a>
                    <h5 class="px-3">DC Merchandise</h5>
                </li>
                <li>
                    <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="DC Subscription"></a>
                    <h5 class="px-3">Subscription</h5>
                </li>
                <li>
                    <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="DC Comics Shop"></a>
                    <h5 class="px-3">Comic Shop Locator</h5>
                </li>
                <li>
                    <a href="#"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="DC Power Visa"></a>
                    <h5 class="px-3">DC Power Visa</h5>
                </li>
            </ul>
        </div>
    </div>
@endsection
