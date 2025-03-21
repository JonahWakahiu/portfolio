<x-app-layout>
    <section class="flex items-center p-16 bg-teal-950 h-screen text-slate-300">
        <div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
            <div class="max-w-md text-center">
                <h2 class="mb-8 font-extrabold text-9xl dark:text-gray-400">
                    <span class="sr-only">Error</span>404
                </h2>
                <p class="text-2xl font-semibold md:text-3xl">Sorry, we couldn't find this page.</p>
                <p class="mt-4 mb-8 text-slate-400">But dont worry, you can find plenty of other things on our
                    homepage.</p>
                <a rel="noopener noreferrer" href="{{ route('home') }}"
                    class="px-8 py-2 font-semibold rounded bg-violet-600 ">Back to homepage</a>
            </div>
        </div>
    </section>
</x-app-layout>
