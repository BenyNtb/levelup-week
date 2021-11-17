<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p><b>YOU</b></p>
                    <br>
                    <div class="flex">
                        <div>
                            <img class="border-4 border-green-500" src={{asset('img/' . Auth::User()->photo)}} alt="" style="height: 300px">
                        </div>
                        <div class="ml-8">
                            <h5 class="card-subtitle mb-2 text-muted"><b>Nom :</b> {{ Auth::User()->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><b>E-mail :</b> {{ Auth::User()->email }}</h6>
                            <h6 class="card-subtitle mb-2 text-muted"><b>Rôle :</b> {{ Auth::User()->role->name }}</h6>
                            <br>
                        </div>
                        <br>
                    </div>
                    <div class="py-2 mt-4">
                        <div class="text-center">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
