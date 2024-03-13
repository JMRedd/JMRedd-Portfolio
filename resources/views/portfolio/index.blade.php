<x-guest-layout>

    <div class="mx-auto max-w-7xl py-8">

        <h2 class="mt-12 mb-12 text-3xl font-bold tracking-tight text-zinc-300 sm:text-4xl dark:text-zinc-300 text-center">
            Projects - {{ $games->count() }}:
        </h2>

        <ul role="list" class="grid gap-x-4 gap-y-8 sm:grid-cols-1 sm:gap-x-6 lg:grid-cols-3 xl:gap-x-8">
            @foreach($games as $game)
                <li class="relative">
                    <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                        <a href="show/{{ $game->id }}">
                        <img src="https://picsum.photos/600/300?random={{ random_int(1, 100) }}" alt="" class="pointer-events-none object-cover group-hover:opacity-75">
                        <button type="button" class="absolute inset-0 focus:outline-none">
                            <span class="sr-only">View details for {{ $game->name }}</span>
                        </button>
                        </a>
                    </div>
                    <p class="mt-2 pointer-events-none block text-lg font-medium text-zinc-300 text-center">{{ $game->name }}</p>
                </li>
            @endforeach
        </ul>

    </div>


</x-guest-layout>
