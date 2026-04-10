<x-layout>


    <x-slot:title>
        View Notes
    </x-slot>


    <h1 class="font-bold text-4xl">List of Notes</h1>


    @if (session('noteAdded'))
        <p class="mb-6">{{ session('noteAdded') }}</p>
    @endif


    <h1 class="mt-3"> Hello, {{ auth()->user()->name }} </h1>

    
    <div class="mt-4">     
        
        <h1>List of notes</h1>

    </div>


</x-layout>