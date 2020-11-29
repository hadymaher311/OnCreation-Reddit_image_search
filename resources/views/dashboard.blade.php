<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex mb-4">
                    <div class="w-11/12">
                        <input id="image-search-input" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal" type="text" placeholder="Search ...">
                    </div>
                    <div class="w-1/12">
                        <button id="image-search" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Search
                        </button>
                    </div>
                </div>
                <div id="image-preview" class="row mb-4">
                </div>
            </div>
        </div>
    </div>
    @include('layouts/js')
</x-app-layout>
