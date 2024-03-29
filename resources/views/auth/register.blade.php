<x-layout>
    <x-slot name="title">Wallaulab - Register</x-slot>
    <!-- ======= REGISTER ======= -->
    <div class="container-fluid bg-accent vh-100">
        <div class="row mb-5 pb-5">
            <div class="col-12">
                <div class="d-flex flex-column align-items-center ">
                    <div class="form-content w-50 justify-content-center mb-5 pb-5">
                        <!--FORM TITLE -->
                        <div class="section-title">
                            <h2 class="form-title space-around">{{ __('Crear tu cuenta') }}
                                <!-- <span> Rapido.es</span> -->
                            </h2>
                            <!-- <p>Ut possimus qui ut temporibus culpa velit autem.</p> -->
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!--FORM FIELDS -->
                        <form action="/register" method="POST" role="form" class="php-email-form">
                            @csrf
                            <!--Name -->
                            <div class="form-field-edit form-field space-around my-2">
                                <input type="text" name="name" id="name"
                                    class="form-control forms_field-input" placeholder="{{ __("Tu nombre") }}" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <!--Email -->
                            <div class="form-field-edit form-field space-around my-2">
                                <input type="email" name="email" id="email"
                                    class="form-control forms_field-input" placeholder="{{ __("Tu correo") }}" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <!--Password -->
                            <div class="form-field-edit form-field space-around my-2">
                                <input type="password" name="password" id="password"
                                    class="form-control forms_field-input" placeholder="{{ __("Tu contraseña") }}">
                                <div class="validate"></div>
                            </div>
                            <!--Password Confirmation -->
                            <div class="form-field-edit form-field space-around my-2">
                                <input type="password" name="password_confirmation" id="password"
                                    class="form-control forms_field-input" placeholder="{{ __("Confirma Contraseña") }}">
                                <div class="validate"></div>
                            </div>
                            <!--Button-Register-->
                            <button type="submit" class=" btn btn-primary form-button-edit text-center space-around my-2">
                                {{ __("Registrar") }}
                            </button>
                        </form>
                    </div>
                    <div class="form-link mt-4 d-flex">
                        <p class="text-white">{{ __("¿Ya eres de los nuestros?") }}</p>
                        <a class="text-reset text-decoration-none ps-2" href="{{ route('login') }}"><u>{{ __("¡Entra ya!") }}</u></a>
                    </div>
                </div>
            </div>
        </div>
        </section>
</x-layout>
