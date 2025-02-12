@auth
    <x-panel>
        <form method="post" action="/posts/{{ $post->slug }}/comments" >
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?id={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                                    <textarea class="w-full text-sm focus:outline-none focus:ring"
                                              placeholder="Quick, think of something!"
                                              name="body"
                                              rows="5"
                                              required></textarea>
                @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p>
        <a href="/register" class="hover:underline">Register</a> or <a class="hover:underline" href="/login">Login to leave a comment.</a>
    </p>
@endauth
