<x-layout>
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 text-right m-text-center">
                    <h1>¿Tienes un producto y no sabes qué hacer con él?</h1>
                </div>
                <div class="col-md-4 col-sm-4 m-text-center">
                    <a class="btn btn-white" href="{{ Route("ads.create")}}">¡SÚBELO!</a> 
                </div>
            </div>
        </div>
    </section>
    
    <x-slot name='title'>Rapido - Homepage</x-slot>
    <h1>Bienvenido a Rapido.es</h1>
</x-layout>