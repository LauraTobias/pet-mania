<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('register') }}" style="margin-bottom: 5%;">
                        @csrf

                        <!-- Name and Email-->
                        <div class="row">
                            <div class="col-lg-6">
                                <x-label for="name" :value="__('Nome')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                            <div class="col-lg-6">
                                <x-label for="email" :value="__('E-mail')" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="row">
                            <div class="col-lg-6">
                                <x-label for="password" :value="__('Senha')" class="mt-4"  />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            </div>
                            <div class="col-lg-6">
                                <x-label for="password_confirmation" :value="__('Confirme a Senha')" class="mt-4" />
                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="row">
                            <div class="col-lg-6">
                                <x-label for="address" :value="__('Endereço')" class="mt-4" />
                                <x-input id="address" class="block mt-1 w-full" type="text" name="address" required />
                            </div>
                            <div class="col-lg-6">
                                <x-label for="cep" :value="__('CEP')" class="mt-4" />
                                <x-input id="cep" class="block mt-1 w-full" type="text" name="cep" pattern="[0-9]{8}" required />
                            </div>            
                        </div>

                        <!-- State -->
                        <div class="row">
                            <div class="col-lg-6">
                                <x-label for="state" :value="__('Estado')" class="mt-4" />
                                <select id="state" name="state" required class="form-select block mt-1 w-full rounded-md shadow-sm border-pink-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50"> 
                                    <option value="" selected hidden>Selecione...</option>
                                    @foreach(config('states.options') as $key => $value)
                                    <option value="{{ $key }}"> {{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="isAdmin" class="inline-flex items-center mt-5">
                                    <input id="isAdmin" type="checkbox" class="rounded border-pink-300 text-pink-600 shadow-sm focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50" name="isAdmin">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('É funcionário') }}</span>
                                </label>
                            </div>            
                        </div>
                        
                        <div class="flex items-center justify-center mt-4">
                            <x-button class="ml-4 mt-4"> {{ __('Cadastrar') }} </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </ >
</x-app-layout>
