<x-app-layout>
    <div class="max-w-3xl mx-auto py-12 px-8 bg-white shadow-lg rounded-lg">
        <div class="flex justify-between items-center border-b pb-4">
            <h1 class="text-3xl font-semibold text-gray-900">Note Details</h1>
            <div class="flex gap-3">
                <a href="{{ route('note.edit', $note) }}" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">Edit</a>
                <form method="POST" action="{{route('note.destroy', $note)}}">
                    @csrf
                    @method('DELETE')
                    <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">Delete</button>
                </form>
            </div>
        </div>
        <p class="text-gray-700 mt-6 text-lg leading-relaxed">{{$note->note}}</p>
        <p class="text-gray-500 mt-4 text-sm">Created on: {{ $note->created_at->format('M d, Y h:i A') }}</p>
    </div>
</x-app-layout>
