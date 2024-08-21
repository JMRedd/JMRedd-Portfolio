<x-guest-layout>


    <div class="mx-auto max-w-7xl">

        <h2 class="mb-12 text-3xl font-bold tracking-tight text-zinc-300 sm:text-4xl dark:text-zinc-300 text-center">
            Showcase Projects
        </h2>

        <div class="flex justify-center">
            <ul role="list" class="{{ count($showcaseGames) === 1 ? 'grid grid-cols-1' : 'grid gap-x-4 gap-y-8 sm:grid-cols-1 sm:gap-x-6 lg:grid-cols-3 xl:gap-x-8' }}">
                @foreach($showcaseGames as $game)
                    <li class="relative">
                        <div class="group block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                            <a href="show/{{ $game->id }}">
                                <img src="../{{ $game->image_path }}" alt="" class="pointer-events-none object-cover w-full h-48 group-hover:opacity-75">
                                <!-- Adjust h-48 as needed to match the desired height -->
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

    </div>

    <div class="mx-auto max-w-7xl">

        <h2 class="mb-12 text-3xl font-bold tracking-tight text-zinc-300 sm:text-4xl dark:text-zinc-300 text-center">
            Projects - {{ $games->count() }}:
        </h2>

        <ul role="list" class="grid gap-x-4 gap-y-8 sm:grid-cols-1 sm:gap-x-6 lg:grid-cols-3 xl:gap-x-8">
            @foreach($games as $game)
                <li class="relative">
                    <div class="group block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                        <a href="show/{{ $game->id }}">
                            <img src="../{{ $game->image_path }}" alt="" class="pointer-events-none object-cover w-full h-48 group-hover:opacity-75">
                            <!-- Adjust h-48 as needed to match the desired height -->
                            <button type="button" class="absolute inset-0 focus:outline-none">
                                <span class="sr-only">View details for {{ $game->name }}</span>
                            </button>
                        </a>
                    </div>
                    <p class="mt-2 pointer-events-none block text-lg font-medium text-zinc-300 text-center">{{ $game->name }}</p>
                    <p class="hidden mt-2 pointer-events-none text-lg font-medium text-zinc-300 text-center">{{ date('d/m/Y', strtotime($game->start_date)) }} to {{ date('d/m/Y', strtotime($game->end_date)) }}</p>
                </li>
            @endforeach
        </ul>

    </div>


</x-guest-layout>
