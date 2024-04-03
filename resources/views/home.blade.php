<x-guest-layout>

    <div class="mt-12 flex justify-center md:flex-row md:text-left">

        <div class="order-1 md:order-1 mb-6 md:mb-0">
            <!-- Image goes here -->
            <img src="/media/jmredd_portrait.jpg" alt="Your Image" class="w-1/2 rounded-full m-auto" />
        </div>

    </div>



    <div class="mt-12 flex flex-col md:flex-row items-center">

        <div class="order-2 md:order-2 flex flex-col md:flex-row justify-center items-center">
            <h1 class="text-4xl text-center font-bold tracking-tight text-zinc-800 md:text-5xl dark:text-zinc-100 md:mr-5 md:mb-0">
                Designer. Artist. Developer. Storyteller.
            </h1>

            <div>
                <p class="hidden mt-10 text-zinc-400 sm:text-left">I'm Justin Redd, a video game designer, artist, creative collaborator, writer and storyteller.
                    As a passionate game designer, I immerse myself in the ever-evolving world of interactive entertainment, where creativity meets innovation.
                    My journey in game design is fueled by a relentless curiosity and a deep appreciation for the artistry of digital storytelling.</p>

                <p class="mt-10 text-zinc-400 sm:text-left">I am a junior game designer, artist, creative collaborator, writer and storyteller.
                    I have 3 years experience with a specialty in systems and level design. I aspire to create experiences through games that leave a lasting impact.
                    I currently study at Full Sail University and I'm schedule to graduate March 2024.
                </p>
                <p class="mt-10 text-zinc-400 sm:text-left">
                    Through my educational journey I have developed real world experience and industry skills.
                    I am proficient in Unreal Engine, Perforce, Jira, Confluence, and I have fundamentals in C#, landscaping, UI design, and general arts.
                </p>

                <div class="mt-6 flex gap-6 m-auto">
                    <a class="group -m-1 p-1" aria-label="Follow on X" href="https://twitter.com/Justin_M_Redd"><svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300"><path d="M13.3174 10.7749L19.1457 4H17.7646L12.7039 9.88256L8.66193 4H4L10.1122 12.8955L4 20H5.38119L10.7254 13.7878L14.994 20H19.656L13.3171 10.7749H13.3174ZM11.4257 12.9738L10.8064 12.0881L5.87886 5.03974H8.00029L11.9769 10.728L12.5962 11.6137L17.7652 19.0075H15.6438L11.4257 12.9742V12.9738Z"></path></svg></a><a class="group -m-1 p-1" aria-label="Follow on YouTube" href="#"></a><a class="group -m-1 p-1" aria-label="Follow on LinkedIn" href="https://www.linkedin.com/in/justin-redd-a3603028b/"><svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-zinc-500 transition group-hover:fill-zinc-600 dark:fill-zinc-400 dark:group-hover:fill-zinc-300"><path d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 01-1.548-1.549 1.548 1.548 0 111.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z"></path></svg></a></div>
            </div>
            </div>
        </div>

    <div class="mx-auto max-w-7xl py-8">

        <h2 class="mt-12 mb-12 text-3xl font-bold tracking-tight text-zinc-300 sm:text-4xl dark:text-zinc-300 text-center">
            Portfolio Projects - {{ $games->count() }}:
        </h2>

        <ul role="list" class="grid gap-x-4 gap-y-8 sm:grid-cols-1 sm:gap-x-6 lg:grid-cols-3 xl:gap-x-8">
            @foreach($games as $game)
            <li class="relative">
                <div class="group aspect-h-7 aspect-w-10 block w-full overflow-hidden rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 focus-within:ring-offset-gray-100">
                    <a href="portfolio/show/{{ $game->id }}">
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
