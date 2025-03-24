<x-app-layout>
    <div class="max-w-3xl mx-auto py-12 px-8 bg-white shadow-lg rounded-lg">
        <h1 class="text-4xl font-bold text-gray-400 mb-6">Create New Note</h1>
        <form method="POST" action="{{ route('note.store') }}" class="space-y-6">
            @csrf
            <textarea name="note" rows="8" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200" placeholder="Write your thoughts here..."></textarea>
            <div class="flex justify-between items-center">
                <a href="{{route('note.index')}}" class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">Cancel</a>
                <button class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
