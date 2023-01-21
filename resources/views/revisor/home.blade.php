<x-layout>
    <x-slot name='title'>Wallaulab - Revisor Home</x-slot>
    @if ($ad)
        <div class='container my-5 py-5'>
            <div class='row'>
                <div class='col-12 col-md-8 offset-md-2'>
                    <div class="card">
                        <div class="card-header">
                            {{ __('Anuncio') }} #{{ $ad->id }}
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <b>{{ __('Imágenes') }}</b>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        @forelse ($ad->images as $image)
                                            <div class="col-md-4">
                                                <img src="{{ $image->getUrl(400, 300) }}" class="img-fluid"
                                                    alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <p class="alert alert-info">aquí se mostaría el tipo de contenido utilizando Safe Search de google API, no se muestra por temas de credenciales<p>
                                                {{-- Adult : <i class="bi bi-circle-fill {{ $image->adult }}"></i>
                                                [{{ $image->adult }}] <br>
                                                Spoof : <i class="bi bi-circle-fill {{ $image->spoof }}"></i>
                                                [{{ $image->spoof }}] <br>
                                                Medical : <i class="bi bi-circle-fill {{ $image->medical }}"></i>
                                                [{{ $image->medical }}] <br>
                                                Violence : <i class="bi bi-circle-fill {{ $image->violence }}"></i>
                                                [{{ $image->violence }}] <br>
                                                Racy : <i class="bi bi-circle-fill {{ $image->racy }}"></i>
                                                [{{ $image->racy }}] --}}
                                                <br><br>

                                                <b>Labels</b><br>
                                                <p class="alert alert-info">aquí se mostarían unas estiquetas creadas de manera dinámica con la google API con tags del contenido de la imgen, no se muestra por temas de credenciales<p>
                                                {{-- @foreach ($image->labels as $label)
                                                    <a href="#"
                                                        class="btn btn-info btn-sm m-1">{{ $label }}</a>
                                                @endforeach --}}
                                                <br><br>
                                                id: {{ $image->id }} <br>
                                                path: {{ $image->path }} <br>
                                                url: {{ Storage::url($image->path) }} <br><br>
                                            </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <b>{{ __('No hay imágenes') }}</b>
                                    </div>
    @endforelse
    </div>
    </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <b>{{ __('Usuario') }}</b>
        </div>
        <div class="col-md-9">
            #{{ $ad->user->id }} - {{ $ad->user->name }} - {{ $ad->user->email }}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <b>{{ __('Título') }}</b>
        </div>
        <div class="col-md-9">
            {{ $ad->title }}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <b>{{ __('Precio') }}</b>
        </div>
        <div class="col-md-9">
            {{ $ad->price }}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <b>{{ __('Descripción') }}</b>
        </div>
        <div class="col-md-9">
            {{ $ad->body }}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <b>{{ __('Categoría') }}</b>
        </div>
        <div class="col-md-9">
            {{ $ad->category->name }}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <b>{{ __('Pubcliado el:') }}</b>
        </div>
        <div class="col-md-9">
            {{ $ad->created_at }}
        </div>
    </div>
    </div>
    </div>
    <div class="row my-3">
        <div class="col-6">
            <form action="{{ route('revisor.ad.reject', $ad) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-danger">{{ __('Rechazar') }}</button>
            </form>
        </div>
        <div class="col-6 text-end">
            <form action="{{ route('revisor.ad.accept', $ad) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success">{{ __('Aceptar') }}</button>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
@else
    <h3 class="text-center">{{ __('No hay anuncios para revisar, vuelve más tarde, gracias') }}</h3>
    @endif
</x-layout>
