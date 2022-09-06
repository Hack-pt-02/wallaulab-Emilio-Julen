<x-layout>
    <x-slot name='title'>Rapido - Homepage</x-slot>
    <h1>Bienvenido a Wallaulab.es</h1>
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 text-right m-text-center">
                    <h1>¿Tienes un producto y no sabes qué hacer con él?</h1>
                </div>
                <div class="col-md-4 col-sm-4 m-text-center">
                    <a class="btn btn-white" href="{{ Route('ads.create') }}">¡SÚBELO!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container my-3">
        <div class="row">
            @forelse($ads as $ad)
                <div class='col-12 col-md-4'>
                    <div class='card mb-5'>
                        <img src="https://picsum.photos/500" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $ad->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $ad->price }}
                                <p class="card-text">{{ $ad->body }}</p>
                                <div class="card-subtitle mb-2">
                                    <strong><a href="{{route('category.ads',$ad->category)}}">#{{ $ad->category->name }}</a></strong>
                                    <i>{{ $ad->created_at->format('d/m/Y') }}</i>
                                </div>
                                <div class="card-subtitle mb-2">
                                    <small>{{ $ad->user->name }}</small>
                                </div>
                                <a href="{{route("ads.show", $ad)}}" class="btn btn-primary">Mostrar más</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <h2>Uyy.. parece que no hay nada</h2>
                    <a href="{{ route('ads.create') }}" class="btn btn-success">Vende tu primer objeto</a> o <a href="{{ route('home') }}" class="btn btn-primary">Vuelve a la home</a>
                </div>
            @endforelse
    </section>
</x-layout>