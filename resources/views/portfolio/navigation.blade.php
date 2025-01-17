<nav>
    <div class="flex flex-wrap items-center justify-end py-2.5 tracking-wide gap-x-4 bg-teal-700 px-6 sm:px-10">
        <a href="">info@jonahdevs.co.ke</a>
        <p>+254796893524</p>
        <p>Thika, Kenya</p>
    </div>
</nav>

<nav x-data="{ scrolled: false }" :class="{
    'border-b border-teal-800 sticky top-0 z-20 bg-teal-950': scrolled,

}"
    @scroll.window="scrolled = window.scrollY > 80">
    <div x-data="{ mobileMenuIsOpen: false }" class=" py-4 px-6 sm:px-10 flex items-center justify-between">
        {{-- logo --}}
        <div class="border border-slate-300 font-medium tracking-wide p-1 w-fit">
            JW
        </div>

        <div class="hidden md:flex items-center gap-5 tracking-wide">
            <a href="#home"
                class="relative before:absolute before:w-0 before:h-[2px] before:bg-teal-500 hover:before:w-full before:transition-all before:duration-500 before:ease-in-out before:top-full before:rounded-full">Home</a>
            <a href="#about"
                class="relative before:absolute before:w-0 before:h-[2px] before:bg-teal-500 hover:before:w-full before:transition-all before:duration-500 before:ease-in-out before:top-full before:rounded-full">About
                Us</a>
            <a href="#services"
                class="relative before:absolute before:w-0 before:h-[2px] before:bg-teal-500 hover:before:w-full before:transition-all before:duration-500 before:ease-in-out before:top-full before:rounded-full">Services</a>
            <a href="#projects"
                class="relative before:absolute before:w-0 before:h-[2px] before:bg-teal-500 hover:before:w-full before:transition-all before:duration-500 before:ease-in-out before:top-full before:rounded-full">Projects</a>
            <a href="#contact"
                class="relative before:absolute before:w-0 before:h-[2px] before:bg-teal-500 hover:before:w-full before:transition-all before:duration-500 before:ease-in-out before:top-full before:rounded-full">Contact</a>
        </div>

        <button @click="mobileMenuIsOpen = true" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>


        <div x-cloak x-show="mobileMenuIsOpen" @click.self="mobileMenuIsOpen = false"
            x-transition:enter="transition motion-reduce:transition-none ease-out duration-500"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition motion-reduce:transition-none ease-out duration-300 delay-[600ms]"
            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="fixed h-svh overflow-y-auto inset-0 z-10 bg-teal-900 px-6 py-10 md:hidden">
            <div class="flex items-center justify-between">
                <div class="border border-slate-300 font-medium tracking-wide p-1 w-fit">
                    JW
                </div>

                <button @click="mobileMenuIsOpen = false" type="button" class="hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="mt-5 text-sm font-medium tracking-wide flex flex-col gap-y-2">
                <a x-show="mobileMenuIsOpen" href="#home" @click="mobileMenuIsOpen = false" class="hover:text-white"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-300 delay-[400ms]"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">Home</a>
                <a x-show="mobileMenuIsOpen" href="#about" @click="mobileMenuIsOpen = false" class="hover:text-white "
                    x-transition:enter="transition ease-out duration-300 delay-[100ms]"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-300 delay-[300ms]"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">About Us</a>
                <a x-show="mobileMenuIsOpen" href="#services" @click="mobileMenuIsOpen = false"
                    class="hover:text-white " x-transition:enter="transition ease-out duration-300 delay-[200ms]"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-300 delay-[200ms]"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">Services</a>
                <a x-show="mobileMenuIsOpen" href="#projects" @click="mobileMenuIsOpen = false"
                    class="hover:text-white " x-transition:enter="transition ease-out duration-300 delay-[300ms]"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-300 delay-[100ms]"
                    x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">Projects</a>
                <a x-show="mobileMenuIsOpen" href="#contact" @click="mobileMenuIsOpen = false" class="hover:text-white "
                    x-transition:enter="transition ease-out duration-300 delay-[400ms]"
                    x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="-translate-x-full">Contact</a>
            </div>
        </div>
    </div>
</nav>
