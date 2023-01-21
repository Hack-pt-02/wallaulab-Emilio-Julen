<x-layout>
    <x-slot name='title'>Wallaulab - Vende algo</x-slot>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card d-flex justify-content-center">
                    <div class="card-header">
                        Nuevo anuncio
                    </div>
                    <div class="card-body">
                        <livewire:create-ad />
                    </div>
                    <div class="d-flex justify-content-center my-3"> 
                    <a class="btn btn-danger" href="{{route('revisor.make',$user)}}">SOLICITAR SER REVISOR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>