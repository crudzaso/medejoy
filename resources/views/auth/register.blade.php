<x-guest-layout>
  

        <!-- Contenedor principal con flex para dividir la pantalla -->
        <div class="flex h-screen w-full">
            <!-- Columna de "Acerca de Nosotros" que ocupa la mitad de la pantalla -->
            <div class="w-1/2 bg-blue-500 flex flex-col items-center justify-center p-8">
                <div class="mb-8">
                    <img src="{{ asset('images/register-image.jpg') }}" alt="Logo" class="h-16">
                </div>
                <div class="text-white text-center">
                    <h2 class="text-2xl font-bold mb-4">Acerca de Nosotros</h2>
                    <p class="text-lg">Somos una empresa dedicada a la organización de rifas emocionantes y seguras para nuestros clientes.</p>
                </div>
            </div>

            <!-- Columna del formulario de registro que ocupa la otra mitad -->
        <div class="w-1/2 flex flex-col items-center justify-center p-8 bg-gray-50">
                <x-validation-errors class="mb-4" />
                 <x-authentication-card>
                    <x-slot name="logo">
                        <x-authentication-card-logo />
                    </x-slot>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ms-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-button class="ms-4">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>
                </x-authentication-card>
            </div>
        </div>
    
</x-guest-layout>
