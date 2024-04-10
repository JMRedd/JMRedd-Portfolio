<x-guest-layout>

    <div class="relative">
        <!-- Center the image horizontally on extra-large screens -->
        <img class="mx-auto rounded opacity-55" src="../../{{ $game->image_path }}" alt="{{ $game->name }} Cover Photo">
        <div class="absolute bg-gradient-to-t from-black to-transparent opacity-90"></div>

        <!-- Updated text container -->
        <div class="absolute inset-0 flex items-center justify-center z-10">
            <h1 class="text-5xl font-bold tracking-tight text-white sm:text-5xl dark:text-zinc-100 text-center ">
                @auth
                <a href="/portfolio/edit/{{ $game->id  }}">EDIT</a>
                @endauth
                {{ $game->name }}
            </h1>
        </div>
    </div>

    <div class="mt-12 w-3/4">
        <div class="mt-10 text-zinc-300">
            @if(isset($game->project_status))
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Project Status:</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->project_status }}</p>
            </div>
            @endif
                @if(isset($game->project_type))
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Project Type:</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->project_type }}</p>
            </div>
                @endif
                @if(isset($game->project_duration))
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Project Duration:</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->project_duration }}</p>
            </div>
                @endif
                @if(isset($game->software_used))
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Software Used:</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->software_used }}</p>
            </div>
                @endif
                @if(isset($game->languages_used))
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Languages Used:</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->languages_used }}</p>
            </div>
                @endif
                @if(isset($game->primary_roles))
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Primary Role(s):</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->primary_roles }}</p>
            </div>
                @endif
            <br>
                @if(isset($game->file_path))
                <div class="flex items-center mr-8">
                    <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 italic">Download Files...</h3>
                    <p class="mr-2 text-xl font-extrabold"><a href="{{ $game->file_path }}" target="_blank">LINK</a></p>
                </div>
                @endif
                    @if(isset($game->itch_link))
                <div class="flex items-center mr-8">
                    <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 italic">Visit the ITCH.IO Page...</h3>
                    <p class="mr-2 text-xl font-extrabold"><a href="{{ $game->itch_link }}" target="_blank">LINK</a></p>
                </div>
                    @endif
                    @if(isset($game->steam_link))
                <div class="flex items-center">
                    <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600 italic">Visit the STEAM Page...</h3>
                    <p class="mr-2 text-xl font-extrabold"><a href="{{ $game->steam_link }}" target="_blank">LINK</a></p>
                </div>
                        @endif

            <div class="mt-20 text-zinc-100 text-2xl">

                {!! $game->body !!}
            </div>
        </div>
    </div>

    <script>

    </script>
</x-guest-layout>
