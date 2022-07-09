<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('pet.register') }}" style="margin-bottom: 5%;">
                        @csrf

                        <!-- Name and Bearing-->
                        <div class="row">
                            <div class="col-lg-6">
                                <x-label for="petName" :value="__('Nome do Pet')" />
                                <x-input id="petName" class="block mt-1 w-full" type="text" name="petName" :value="old('petName')" required autofocus />
                            </div>
                            <div class="col-lg-6">
                                <x-label for="bearing" :value="__('Porte')" />
                                <select name="bearing" required class="form-select block mt-1 w-full rounded-md shadow-sm border-pink-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
                                    <option value="" selected hidden>Selecione...</option>
                                    @foreach(config('bearings.options') as $key => $value)
                                    <option value="{{ $key }}"> {{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- PetType and Gender -->
                        <div class="row">
                            <div class="col-lg-6">
                                <x-label for="petType" class="mt-4" :value="__('Tipo do Pet')" />
                                <select id="petType" name="petType" required class="form-select block mt-1 w-full rounded-md shadow-sm border-pink-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
                                    <option value="" selected hidden>Selecione...</option>
                                    @foreach(config('petTypes.options') as $key => $value)
                                    <option value="{{ $key }}"> {{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <x-label for="petGender" class="mt-4" :value="__('Sexo do Pet')" />
                                <select id="petGender" name="petGender" required class="form-select block mt-1 w-full rounded-md shadow-sm border-pink-300 focus:border-pink-300 focus:ring focus:ring-pink-200 focus:ring-opacity-50">
                                    <option value="" selected hidden>Selecione...</option>
                                    @foreach(config('petGender.options') as $key => $value)
                                    <option value="{{ $key }}"> {{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Color and Birthday -->
                        <div class="row">
                            <div class="col-lg-6">
                                <x-label for="color" class="mt-4" :value="__('Pelagem/Cor')" />
                                <x-input id="color" class="block mt-1 w-full" type="text" name="color" required />
                            </div>
                            <div class="col-lg-6">
                                <x-label for="birthday" class="mt-4" :value="__('Data de Nascimento')" />
                                <x-input id="birthday" class="block mt-1 w-full" type="text" name="birthday" pattern="\d{1,2}/\d{1,2}/\d{4}" required />
                            </div>            
                        </div>

                        <!-- Weight and Email -->
                        <div class="row">
                            <div class="col-lg-6">
                                <x-label for="weight" class="mt-4" :value="__('Peso')" />
                                <x-input id="weight" class="block mt-1 w-full" type="number" name="weight" required />
                            </div>
                            <div class="col-lg-6">
                                @if(Auth::user()->isAdmin ?? false)
                                <x-label for="email" class="mt-4" :value="__('E-mail do Tutor')" />
                                <x-input id="email" class="block mt-1 w-full" type="text" name="email" required />
                                @endif
                            </div>            
                        </div>
                        
                        <div class="flex items-center justify-center mt-4">
                            <x-button class="ml-4 mt-4"> {{ __('Cadastrar') }} </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>