<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>
<style>
    .navbar-nav>a:hover,
    #hovered:hover {
        background-color: rgb(232, 232, 232);
        border-radius: 5px
    }
    a{
        text-decoration: none;
        color:black;
    }

    .ma_nav{
        height: 10%;
        margin-left: 97%;
    }

   
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" height="50px" href="#"><img src="{{ asset('images/image0.svg') }}"
                class="h-25" height="100px" width="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse position-relative" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active text-dark" aria-current="page" href="/">Home</a>
                <a class="nav-link text-dark" href="{{ route('admin.index')}}">Drink</a>
                <a class="nav-link text-dark" href="#">Pricing</a>
                <a class="nav-link text-dark" href="/admin">Admin</a>
                @if (Route::has('login'))
                    <div class=".collapse.navbar-collapse position-absolute top-0 end-0 align-middle" class="a">
                        @auth
                            <a id="hovered" href="{{ url('/dashboard') }}"
                                class="text-decoration-none align-middle ">Dashboard</a>
                        @else
                            <a id="hovered" href="{{ route('login') }}"
                                class="text-decoration-none text-dark align-middle p-2">Log in</a>
                            @if (Route::has('register'))
                                <a id="hovered" href="{{ route('register') }}"
                                    class="text-decoration-none text-dark align-middle p-2">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
        <a href="#" class="position-absolute start-50 translate-middle top-50 "><img
                src="{{asset('images/image2.svg') }}" height="65px" width="135px"></a>
    </div>
</nav>
<div class="ma_nav">
    <a href="{{ route('cart.list') }}" class="flex items-center">
        <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" >
             <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
        </svg>
          {{ Cart::getTotalQuantity()}}
    </a>
</div>

