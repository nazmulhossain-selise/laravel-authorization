<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- display question and answer -->
                    <div class="mb-4">
                        <h1 class="text-2xl font-bold">{{ $question->question }}</h1>
                        <p class="text-sm"><i>{{ $question->created_at->diffForHumans() }}</i> posted by <b>{{ $question->user->name }}</b></p>
                    </div>

                    <!-- display answers -->

                    @if ($question->answers->count())
                        <div class="mb-4">
                            <h2 class="text-xl font-bold">Answers</h2>
                        </div>
                        <div class="mb-4">
                            @foreach ($question->answers as $answer)
                                <div class="mb-4">
                                    <p>{{ $answer->answer }}</p>
                                    <p class="text-sm"><i>{{ $answer->created_at->diffForHumans() }}</i> posted by <b>{{ $answer->user->name }}</b></p>
                                </div>
                            @endforeach
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>