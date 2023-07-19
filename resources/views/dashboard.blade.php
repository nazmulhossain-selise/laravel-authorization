<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- display questions -->
                    @if ($questions->count())
                        <div class="mb-4">
                            <h1 class="text-2xl font-bold">Top Questions</h1>
                        </div>
                        <div class="mb-4">
                            @foreach ($questions as $question)
                                <div class="mb-4">
                                    <h2><a href="{{ route('questions.show', $question) }}" class="text-lg font-bold">{{ $question->question }}</a></h2>
                                    <p class="text-sm"><i>{{ $question->created_at->diffForHumans() }}</i> posted by <b>{{ $question->user->name }}</b></p> 
                                </div>
                            @endforeach
                        </div>
                        <div class="mb-4">
                            {{ $questions->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
