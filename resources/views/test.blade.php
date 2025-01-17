<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Alpine.js</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="scroll-smooth">

    <div x-data="{ modalIsOpen: false }">
        <button @click="modalIsOpen = true" type="button"
            class="cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white">Open
            Modal</button>
        <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms x-trap.inert.noscroll="modalIsOpen"
            @keydown.esc.window="modalIsOpen = false" @click.self="modalIsOpen = false"
            class="fixed inset-0 z-30 flex items-start justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8 overflow-y-scroll"
            role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
            <!-- Modal Dialog -->
            <div x-show="modalIsOpen"
                x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-md border border-neutral-300 bg-white text-neutral-600 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-300">
                <!-- Dialog Header -->
                <div
                    class="flex items-center justify-between border-b border-neutral-300 bg-neutral-50/60 p-4 dark:border-neutral-700 dark:bg-neutral-950/20">
                    <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-neutral-900 dark:text-white">
                        Special Offer</h3>
                    <button @click="modalIsOpen = false" aria-label="close modal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                            stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Dialog Body -->
                <div class="px-4 py-8">
                    <p>As a token of appreciation, we have an exclusive offer just for you. Upgrade your account now to
                        unlock premium features and enjoy a seamless experience.</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptates aperiam minus,
                        labore eaque aspernatur ea! Odio voluptatum, ex vel vero dolor molestias ad eos asperiores, quos
                        laudantium quasi! Possimus dolorum laboriosam temporibus, quia quis tempore, repellat impedit
                        nihil perspiciatis quasi est animi amet fugiat ratione laborum quam quisquam dolor sed rem! Vel
                        ducimus reprehenderit eligendi error voluptatum doloribus odio culpa optio? Harum quia eveniet
                        aliquam minus? Qui iste enim deleniti voluptate. Quo, consequuntur et nemo soluta praesentium
                        maiores ipsam ullam! Voluptatum fugit quaerat nulla voluptatem libero odit. Laboriosam adipisci
                        vel voluptas ullam eum tempore dolor eaque aut architecto nostrum.</p>
                </div>
                <!-- Dialog Footer -->
                <div
                    class="flex flex-col-reverse justify-between gap-2 border-t border-neutral-300 bg-neutral-50/60 p-4 dark:border-neutral-700 dark:bg-neutral-950/20 sm:flex-row sm:items-center md:justify-end">
                    <button @click="modalIsOpen = false" type="button"
                        class="cursor-pointer whitespace-nowrap rounded-md px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-600 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:text-neutral-300 dark:focus-visible:outline-white">Remind
                        me later</button>
                    <button @click="modalIsOpen = false" type="button"
                        class="cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white">Upgrade
                        Now</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
