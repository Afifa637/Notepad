<x-app-layout>
    <div class="max-w-5xl mx-auto py-12">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-4xl font-bold text-gray-800">Your Notes</h1>
            <a href="{{route('note.create')}}" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition shadow-md">+ New Note</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($notes as $note)
                <div class="p-6 bg-white shadow-lg rounded-lg hover:shadow-xl transition">
                    <p class="text-gray-700 text-lg">{{ Str::words($note->note, 20) }}</p>
                    <div class="flex justify-between mt-4">
                        <a href="{{route('note.show', $note)}}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">View</a>
                        <a href="{{route('note.edit', $note)}}" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">Edit</a>
                        <form method="POST" action="{{route('note.destroy', $note)}}">
                            @csrf
                            @method('DELETE')
                            <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-6">{{$notes->links()}}</div>
    </div>
</x-app-layout>
