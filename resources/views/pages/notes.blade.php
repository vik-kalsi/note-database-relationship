<x-layout>


    <x-slot:title>
        View Notes
    </x-slot>


    <h1 class="font-bold text-4xl">List of Notes</h1>


    @if (session('noteAdded'))
        <p class="mb-6">{{ session('noteAdded') }}</p>
    @endif


    @if (session('noteDeletedSuccess'))
        <p class="mb-6">{{ session('noteDeletedSuccess') }}</p>
    @endif


    <h1 class="mt-3"> Hello, {{ auth()->user()->name }} </h1>

    
    <div class="mt-4">
        <h1 class="mb-2 underline underline-offset-2 text-xl font-bold">List of notes</h1>


        @foreach ($notes as $note)
            <ul>
                <li class="border-4 my-6 p-3">
                    <div>
                        {{ $note->content }}
                        <p class="mt-4 text-xs">Note Last Updated: {{ $note->updated_at }}</p>
                    </div>


                    <div class="flex gap-x-3">
                        <form action="/editnote" method="get">
                            @csrf

                            <button class="mt-6 border-2 p-1 cursor-pointer hover:bg-blue-700" type="submit">Edit Note</button>
                        </form>


                        <form action="{{ route('notes.destroy', $note->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button class="mt-6 border-2 p-1 cursor-pointer hover:bg-red-900" type="submit">Delete Note</button>
                        </form>
                    </div>

                </li>
            </ul>
        @endforeach

    </div>


</x-layout>