<x-app-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-teal-950 text-slate-300">
        <img src="https://www.svgrepo.com/show/426192/cogs-settings.svg" alt="Logo" class="mb-5 h-40">
        <h1 class="text-4xl md:text-5xl font-bold text-center text-slate-300 mb-4">Site is
            under maintenance</h1>
        <p class="text-center text-slate-400 mb-8">We're working
            hard to improve the user experience. Stay tuned!</p>
        <div class="flex space-x-4">
            <a href="{{ route('home') }}" class="px-8 py-2 font-semibold rounded bg-violet-600 ">Contact
                Us</a>
            <a href="#" class="border-2 px-8 py-2 border-slate-300 font-semibold rounded ">Reload</a>
        </div>
    </div>
</x-app-layout>
