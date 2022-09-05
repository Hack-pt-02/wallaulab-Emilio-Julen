<x-layout>
    <x-slot name='title'>Wallaulab - {{$category->name}} ads</x-slot>
    <h1>Bienvenido a Rapido.es</h1>
    
    <section class="container my-3">
        <h1>Anuncios por categoría: {{$category->name}}</h1>
        <div class="row">
            @forelse($ads as $ad)
                <div class='col-12 col-md-4'>
                    <div class='card mb-5'>
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $ad->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $ad->price }}
                                <p class="card-text">{{ $ad->body }}</p>
                                <div class="card-subtitle mb-2">
                                    <strong><a href="{{route('category.ads',$ad->category)}}">#{{ $category->name }}</a></strong>
                                    <i>{{ $ad->created_at->format('d/m/Y') }}</i>
                                </div>
                                <div class="card-subtitle mb-2">
                                    <small>{{ $ad->user->name }}</small>
                                </div>
                                <a href="#" class="btn btn-primary">Mostrar más</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <h2>Uyy... parece que no hay nada de esta categoría...</h2>
                    <a href="{{ route('ads.create') }}" class="btn btn-success">Vende tu primer objeto</a> o <a href="{{ route('home') }}" class="btn btn-primary">Vuelve a la home</a>
                </div>
            @endforelse
    </section>
</x-layout>