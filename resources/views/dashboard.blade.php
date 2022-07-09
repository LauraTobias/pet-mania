<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center justify-center">
                        <div class="row" style="margin-bottom: 5%;">
                            <div class="col-lg-4">
                                <img class="bd-placeholder-img rounded-circle cats" width="140" height="140" src="{{ URL::asset('/images/cat.png')}}" style="margin-left: 30%; margin-bottom: 5%;"/>
                                <h2>Gatos</h2>
                                <p style="margin: 3%;">Adotou um ou já tem um felino em casa? Então, você veio ao lugar certo, pois aqui na PetMania tem tudo o que seu gato precisa.</p>
                                <x-button class="ml-3"> {{ __('Ver produtos') }} </x-button>
                            </div>
                            <div class="col-lg-4">
                                <img class="bd-placeholder-img rounded-circle dogs" width="140" height="140" src="{{ URL::asset('/images/dog.png')}}" style="margin-left: 30%; margin-bottom: 5%;"/>
                                <h2>Cachorros</h2>
                                <p style="margin: 3%;">Os cachorros precisam de uma vida pet tranquila e feliz. Por isso, dê uma olhada em nossos produtos que vão deixar seu pet super feliz! </p>
                                <x-button class="ml-3"> {{ __('Ver produtos') }} </x-button>
                            </div>
                            <div class="col-lg-4">
                                <img class="bd-placeholder-img rounded-circle birds" width="140" height="140" src="{{ URL::asset('/images/bird.png')}}" style="margin-left: 30%; margin-bottom: 5%;"/>
                                <h2>Aves</h2>
                                <p style="margin: 3%;">As aves bastante especiais, principalmente por manterem os dias dos tutores mais felizes com suas cantorias, cores e diversidades. </p>
                                <x-button class="ml-3"> {{ __('Ver produtos') }} </x-button>
                            </div>
                        </div>

                        <hr>

                        <div class="row featurette" style="margin-top: 5%;">
                            <div class="col-md-7" style="margin-top: 15%;">
                                <h2 class="dash-title">Pet Mania. <span class="text-muted">Vamos mudar a vida do seu pet!</span></h2>
                                <p class="lead">Queremos ser, mais do que um PetShop, uma segunda casa para o seu pet ter momentos divertidos e felizes.</p>
                            </div>
                            <div class="col-md-5">
                                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{ URL::asset('/images/animal-shelter.png')}}" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#eee" />
                                </img>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-7 order-md-2" style="margin-top: 15%;"> 
                                <h2 class="dash-title">O jeito <span class="text-muted">PetMania</span> de cuidar do seu Pet</h2>
                                <p class="lead">Receio de deixar seu pet? Claro. Os pets são companheiros 24H/7 e muito importantes para a vida dos seus tutores. Por isso, queremos construir uma relação de confiança com cada cliente e tratar seu pet de modo especial, com muito carinho e amor!</p>
                            </div>
                            <div class="col-md-5 order-md-1">
                                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{ URL::asset('/images/owner.png')}}" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#eee" />
                                </img>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-md-7"  style="margin-top: 15%;">
                                <h2 class="dash-title">Interessado? <span class="text-muted">Agende um atendimento!</span></h2>
                                <p class="lead">E sim, você consegue fazer isso através do nosso site. Mas se ainda se sentir melhor conversando sobre seu pet, pode nos ligar através de um de nossos <a href="/contatos">contatos</a>.</p>
                            </div>
                            <div class="col-md-5">
                                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="{{ URL::asset('/images/schedule.png')}}" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <rect width="100%" height="100%" fill="#eee" />
                                </img>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
