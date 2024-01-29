<?php 
$menu = [
    [
        'name' => 'characters',
        'link' => '#', 
    ],
    [
        'name' => 'comics',
        'link' => '#', 
    ],
    [
        'name' => 'movies',
        'link' => '#', 
    ],
    [
        'name' => 'tv',
        'link' => '#', 
    ],
    [
        'name' => 'games',
        'link' => '#', 
    ],
    [
        'name' => 'collectibles',
        'link' => '#', 
    ],
    [
        'name' => 'videos',
        'link' => '#', 
    ],
    [
        'name' => 'fans',
        'link' => '#', 
    ],
    [
        'name' => 'news',
        'link' => '#', 
    ],
    [
        'name' => 'shop',
        'link' => '#', 
    ],
]
?>
<header>
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo-container">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" class="mt-2">
        </div>
        <nav>
            <ul class="list-unstyled d-flex align-items-center text-uppercase gap-3">
                @foreach ($menu as $item )
                    <li>
                        <a href="{{$item['link']}}">{{$item['name']}}</a>
                    </li>
                @endforeach
            </ul>
        </nav>

    </div>
</header>
