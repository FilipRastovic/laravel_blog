@props(['posts'])

<x-post-featured-card :post="$posts[0]"></x-post-featured-card>

@if ( $posts->count() > 1 )
    <div class="lg:grid lg:grid-cols-3">
        @foreach($posts->skip(1) as $post )
            <x-post-card
                :post="$post"
                class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}">
            </x-post-card>
        @endforeach
    </div>
@endif
