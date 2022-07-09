<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    @foreach ($products as $product)
                    <div class="col-lg-2 table-pet overflow-hidden shadow-sm sm:rounded-lg"> 
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="{{ URL::asset('/images/treat.png')}}" style="margin-bottom: 5%;"/>
                        <p class="title-pet">{{ $product->name }}</p>
                        <p style="font-weight: bold;">R${{ $product->price }}</p>
                    </div>
                    @endforeach
                    <div class="col-lg-12">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>