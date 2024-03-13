<x-guest-layout>
    <div class="relative">
        <!-- Center the image horizontally on extra-large screens -->
        <img class="mx-auto rounded opacity-45" src="jmredd.com/media/UE5-BG.png" alt="Unreal Engine Cover Photo">
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
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Project Status:</h3>
                <p class="">{{ $game->project_status }}</p>
            </div>
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Project Type:</h3>
                <p>{{ $game->project_type }}</p>
            </div>
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Project Duration:</h3>
                <p>{{ $game->project_duration }}</p>
            </div>
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Software Used:</h3>
                <p>{{ $game->software_used }}</p>
            </div>
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Languages Used:</h3>
                <p>{{ $game->languages_used }}</p>
            </div>
            <div class="flex items-center mb-4">
                <h3 class="mr-2 text-xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-pink-600">Primary Role(s):</h3>
                <p>{{ $game->primary_roles }}</p>
            </div>

            <div class="mt-20 text-zinc-100 text-2xl">

                {!! $game->body !!}
            </div>
        </div>
    </div>
</x-guest-layout>
