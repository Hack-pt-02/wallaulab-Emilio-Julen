<div>
    @if (session()->has('message'))
        {{-- <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div> --}}
        @if (session()->has('message') == 'success')
            <script>
                console.log('funciona!')
                Swal.fire(
                    '¡Felicidades!',
                    'Anuncio subido correctamente',
                    'success'
                )
            </script>
        @else
            <script>
                console.log('no funciona!')
                Swal.fire(
                    'Fatal error!',
                    'El anuncio no se ha podido cargar',
                    'error'
                )
            </script>
        @endif
    @endif
    <h1>{{ __('Nuevo Anuncio') }}</h1>
    <p class="alert alert-warning">Pagina de muestra, ¡no introducir datos reales!</p>
    <div class="alert alert-info">
        <ul>
            <p>Características:</p>
            <li>Validación de datos dinámica durante la introducción de datos</li>
            <li>No refresca la página mediante la tecnología de livewire</li>
            <li>Los anuncios subidos no se muestran al público hasta que un revisor los apruebe</li>
    </div>
    <form wire:submit.prevent="store">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">{{ __('Título') }}</label>
            <input wire:model="title" type="text" class="form-control 
        @error('title') is-invalid @enderror">
            @error('title')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">{{ __('Categoría') }}</label>
            <select wire:model.defer="category" class="form-control">
                <option value="" @error('category') is-invalid @enderror>{{ __('Selecciona una Categoría') }}
                </option>
                @error('category')
                    {{ $message }}
                @enderror
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">{{ __('Precio') }}</label>
            <input wire:model="price" type="number" class="form-control 
        @error('price') is-invalid @enderror">
            @error('price')
                {{ $message }}
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">{{ __('Descripción') }}</label>
            <textarea wire:model="body" cols="30" rows="15"
                class="form-control 
        @error('body') is-invalid @enderror"></textarea>
            @error('body')
                {{ $message }}
            @enderror
            </textarea>
        </div>
        <!-- Image Add -->

        <div class="mb-3">
            <input wire:model="temporary_images" type="file" name="images" multiple
                class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
            @error('temporary_images.*')
                <p class="text-danger mt-2">{{ $message }}</p>
            @enderror
        </div>

        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>{{ __('Vista previa') }}:</p>
                    <div class="row">
                        @foreach ($images as $key => $image)
                            <div class="col-12 col-md-4">
                                <img src="{{ $image->temporaryUrl() }}" alt="" class="img-fluid">
                                <button type="button" class="btn btn-danger"
                                    wire:click="removeImage({{ $key }})">{{ __('Eliminar') }}</button>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        <!-- button -->
        <div class="container d-flex justify-content-center my-3">
            <button id="adCreate" type="submit" class="box-icon btn btn-info">{{ __('Crear') }}<box-icon
                    type='solid' name='save'></box-icon>
            </button>
        </div>
    </form>
</div>
</div>
