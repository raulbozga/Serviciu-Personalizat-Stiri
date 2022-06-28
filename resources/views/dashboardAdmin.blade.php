<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}

        </h2>
    </x-slot> -->

    @if (session()->has('success'))
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-green border-b border-gray-200">
                    <div>
                        <p>{{session('success')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <p>Bine ai venit Admin!</p>


</x-app-layout>