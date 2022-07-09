<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('product.register') }}" method="POST" enctype="multipart/form-data" style="margin-bottom: 5%;">
                        @csrf

                        <!-- Name and Price -->
                        <div class="row">
                            <div class="col-lg-12">
                                <x-label for="name" :value="__('Nome')" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                        </div>

                        <!-- Price and Quantity -->
                        <div class="row">
                            <div class="col-lg-6">
                                <x-label for="price" class="mt-4" :value="__('Preço')" />
                                <x-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required autofocus />
                            </div>
                            <div class="col-lg-6">
                                <x-label for="quantity" class="mt-4" :value="__('Quantidade em Estoque')" />
                                <x-input id="quantity" class="block mt-1 w-full" type="number" name="quantity" :value="old('quantity')" required autofocus />
                            </div>
                        </div>

                        <!-- Color and Birthday -->
                        <div class="row">
                            <div class="col-lg-6">
                                <x-label for="photo" class="mt-4 btn btn-input-file" :value="__('Imagem do Produto')" />
                                <x-input id="photo" class="block mt-1 w-full file" type="file" name="photo" accept="image/png, image/jpeg" hidden required />
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4 mt-4"> {{ __('Cadastrar') }} </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>