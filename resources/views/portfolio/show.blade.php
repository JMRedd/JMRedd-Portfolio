<x-guest-layout>
    <div class="relative">
        <!-- Center the image horizontally on extra-large screens -->
        <img class="mx-auto rounded opacity-45" src="/media/UE5-BG.png" alt="Unreal Engine Cover Photo">
        <div class="absolute bg-gradient-to-t from-black to-transparent opacity-90"></div>

        <!-- Updated text container -->
        <div class="absolute inset-0 flex items-center justify-center z-10">
            <h1 class="text-5xl font-bold tracking-tight text-white sm:text-5xl dark:text-zinc-100 text-center ">
                {{ $game->name }}
            </h1>
        </div>
    </div>

    <div class="mt-12 w-3/4">
        <div class="mt-10 text-zinc-300">
            @if(! $game->project_status->null())
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Project Status:</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->project_status }}</p>
            </div>
            @endif
            @if(! $game->project_type->isEmpty())
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Project Type:</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->project_type }}</p>
            </div>
                @endif
                @if(! $game->project_duration->isEmpty())
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Project Duration:</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->project_duration }}</p>
            </div>
                @endif
                @if(! $game->software_used->isEmpty())
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Software Used:</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->software_used }}</p>
            </div>
                @endif
                @if(! $game->languages_used->isEmpty())
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Languages Used:</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->languages_used }}</p>
            </div>
                @endif
                @if(! $game->primary_roles->isEmpty())
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Primary Role(s):</h3>
                <p class="mr-2 text-xl font-extrabold">{{ $game->primary_roles }}</p>
            </div>
                @endif
            <br>
            <div class="mt-12 flex flex-col md:flex-row items-center">
                @if(! $game->project_status->isEmpty())
                <div class="flex items-center mr-8">
                    <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-green-600"><a href="">Download Files</a></h3>
                </div>
                @endif
                @if(! $game->project_status->isEmpty())
                <div class="flex items-center mr-8 ml-8">
                    <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-red-200 to-red-500"><a href="">Visit the ITCH.IO Page</a></h3>
                </div>
                    @endif
                    @if(! $game->project_status->isEmpty())
                <div class="flex items-center ml-8">
                    <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-blue-600"><a href="">Visit the STEAM Page</a></h3>
                </div>
                        @endif
            </div>

            <div class="mt-20 text-zinc-100 text-2xl">

                {!! $game->body !!}
            </div>
        </div>
    </div>

    <script>

    </script>
</x-guest-layout>
