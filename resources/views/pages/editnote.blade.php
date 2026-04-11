<x-layout>

    <x-slot:title>
        Edit Note
    </x-slot>


    <h1 class="font-bold text-4xl">Edit Note</h1>


    <div class="mt-4">
        <form action="" method="post">
            @csrf

            <div class="grid">
                <textarea name="content" class="field-sizing-fixed w-80 border-2 p-1" rows="2"></textarea>

                <button class="border-2 p-1 cursor-pointer mt-6" type="submit">Edit Note</button>
            </div>

        </form>
    </div>


</x-layout>