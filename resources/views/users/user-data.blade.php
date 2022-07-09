<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />


                    <form method="POST" action="{{ route('user.edit') }}" style="margin-bottom: 5%;">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="name" :value="__('Nome')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="Auth::user()->name" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="email" :value="__('E-mail')" />
                            <x-input :disabled="true"  id="email" class="block mt-1 w-full" type="email" name="email" 
                                :value="Auth::user()->email" required />
                        </div>

                        <!-- Address -->
                        <div class="mt-4">
                            <x-label for="address" :value="__('Endereço')" />
                            <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="Auth::user()->address" required />
                        </div>

                        <!-- CEP -->
                        <div class="mt-4">
                            <x-label for="cep" :value="__('CEP')" />
                            <x-input id="cep" class="block mt-1 w-full" type="text" name="cep" pattern="[0-9]{8}" :value="Auth::user()->cep" required />
                        </div>

                        <!-- State -->
                        <div class="mt-4">
                            <x-label for="state" :value="__('Estado')" />
                            <select id="state" name="state" :value="Auth::user()->state" required class="form-select block mt-1 w-full rounded-md shadow-sm border-pink-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
                                <option value="" selected hidden>Selecione...</option>
                                @foreach(config('states.options') as $key => $value)
                                <option value="{{ $key }}"> {{ $value }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center justify-center mt-4">
                            <x-button class="ml-4">
                                {{ __('Salvar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>