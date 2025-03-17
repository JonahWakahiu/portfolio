<x-app-layout>

    <main class="portfolio bg-teal-950 text-slate-300">

        @include('portfolio.navigation')

        {{-- home section --}}
        <section id="home"
            class="px-6 sm:px-10 min-h-[80svh] flex items-center justify-center flex-col pb-10 max-sm:text-center relative">
            <p class="text-xl sm:text-3xl font-bold tracking-normal sm:tracking-wide">Hello 👋, I'm Jonah Maina</p>
            <p class="text-xl sm:text-3xl font-bold tracking-normal sm:tracking-wide mb-5">A Full-stack developer
            </p>
            <div class="space-x-2">
                <button class="bg-teal-100 text-slate-700 rounded-full px-5 py-1.5">Hire Me</button>
                <a href="{{ route('download.cv') }}" class="bg-slate-500 text-white px-5 rounded-full py-1.5">Download
                    CV</a>
            </div>

            <div x-data="{ show: true }" @scroll.window="show = window.scrollY < 40" x-show="show" x-transition
                class="bg-slate-100 text-slate-700 absolute right-5 bottom-8 md:bottom-5 p-1 w-fit rounded-3xl animate-bounce">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-4 sm:size-5 lg:size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
                </svg>
            </div>
        </section>

        <div class="px-6 sm:px-10 md:px-14 lg:px-20 pb-10 text-sm tracking-wide">
            <div class="swiper" x-init="new Swiper($el, {
                slidesPerView: 1,
                spaceBetween: 8,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 12,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 14,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 16,
                    },
                },
            })">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-person-bounding-box size-10" viewBox="0 0 16 16">
                                <path
                                    d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5" />
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            </svg>
                            <p class="text-white font-medium mb-2 mt-2">User Centric Approach</p>
                            <p>Prioritizing user experience and creating intuitive, functional, and visually appealing
                                applications.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-binoculars size-10"
                                viewBox="0 0 16 16">
                                <path
                                    d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5z" />
                            </svg>
                            <p class="text-white font-medium mb-2 mt-2">Attention to Detail</p>
                            <p>I ensure both the frontend and backend function smoothly and integrate seamlessly.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-arrows-move size-10" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.646.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 1.707V5.5a.5.5 0 0 1-1 0V1.707L6.354 2.854a.5.5 0 1 1-.708-.708zM8 10a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 14.293V10.5A.5.5 0 0 1 8 10M.146 8.354a.5.5 0 0 1 0-.708l2-2a.5.5 0 1 1 .708.708L1.707 7.5H5.5a.5.5 0 0 1 0 1H1.707l1.147 1.146a.5.5 0 0 1-.708.708zM10 8a.5.5 0 0 1 .5-.5h3.793l-1.147-1.146a.5.5 0 0 1 .708-.708l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L14.293 8.5H10.5A.5.5 0 0 1 10 8" />
                            </svg>
                            <p class="text-white font-medium mb-2 mt-2">Adaptability</p>
                            <p>I have the ability to switch seamlessly between frontend and backend development,
                                adapting to
                                project
                                needs and challenges
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-tools size-10"
                                viewBox="0 0 16 16">
                                <path
                                    d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
                            </svg>
                            <p class="text-white font-medium mb-2 mt-2">Problem Solving</p>
                            <p>I have the tendancy of breaking down complex problems into mangeable pieces and finding
                                efficient
                                solutions.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people size-10"
                                viewBox="0 0 16 16">
                                <path
                                    d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                            </svg>
                            <p class="text-white font-medium mb-2 mt-2">Collaboration</p>
                            <p>I work effectively with designers, developers and other stackholders to achieve project
                                goals.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="flex flex-col items-center text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-lightbulb size-10"
                                viewBox="0 0 16 16">
                                <path
                                    d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a2 2 0 0 0-.453-.618A5.98 5.98 0 0 1 2 6m6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1" />
                            </svg>
                            <p class="text-white font-medium mb-2 mt-2">Continuous Learning</p>
                            <p>Technology evolves rapidly, and I lov to stay updated with the latest tools, frameworks,
                                and
                                best
                                practices
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="bg-teal-100 rounded-[20px] md:rounded-[32px] overflow-hidden ">
            {{-- about me --}}
            <section id="about" class="px-6 sm:px-10 md:px-14 lg:px-20 py-20 text-slate-700">
                {{-- part one --}}
                <div class="grid grid-cols-1 gap-10 md:grid-cols-5 items-center">
                    <div class="flex items-center md:col-span-3">
                        <div
                            class="rounded-md h-96 w-full min-w-[300px] max-w-xs overflow-hidden ring-[3px] ring-offset-[5px] ring-teal-500 ring-offset-teal-100">
                            <img src="{{ asset('images/jonah.jpg') }}" alt="jonah"
                                class="w-full h-full object-cover object-center">
                        </div>

                        <div class="rounded-md h-52 w-full max-w-[270px] overflow-hidden ms-7 shadow-md">
                            <img src="https://images.unsplash.com/photo-1628258334105-2a0b3d6efee1?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="code" class="w-full h-full object-cover object-center">
                        </div>
                    </div>

                    <div class="md:col-span-2">
                        <div class="flex items-center gap-3">
                            <div class="bg-teal-500 h-[3px] rounded-full w-12"></div>
                            <p class="font-medium text-slate-800">Jonah Wakahiu Maina</p>
                            <div class="bg-teal-500 h-[3px] rounded-full w-12"></div>
                        </div>
                        <p class="italic text-sm text-slate-800 mb-5">Full-stack developer</p>

                        <div x-data="{ readMore: false }" class="text-sm tracking-wide">
                            <p :class="readMore || 'line-clamp-5'">
                                Jonahdevs is a Kenyan-based full-stack developer and web designer who specializes in
                                creating
                                clean, user-friendly digital experiences that seamlessly blend functionality with
                                aesthetics.
                                With a strong passion for crafting software solutions, he strives to build tools
                                that
                                not
                                only
                                meet technical requirements but also make a positive impact on the lives of their
                                users.
                                <br>
                                His goal is to deliver intuitive, efficient, and impactful applications that solve
                                real-world
                                problems and empower people. Jonahdevs stays updated with the latest technologies
                                and
                                continually refines his skills to provide innovative solutions. Beyond coding, he is
                                driven
                                by a
                                deep desire to contribute meaningfully to businesses and communities through the
                                power
                                of
                                technology.
                            </p>
                            <button type="button" class="underline" @click="readMore = !readMore">
                                <span x-text="readMore ? 'Show less' : 'Read more'"></span>
                            </button>
                        </div>
                    </div>

                </div>

                {{-- part two --}}
                <div class="mt-16 grid grid-cols-1 md:grid-cols-2 items-center gap-10 ">
                    <div class="text-sm tracking-wide">
                        <p class="font-medium text-3xl">Proficiency Levels in Programming Languages</p>
                        <p class="mt-5 mb-5">A visual representation of my expertise in various programming
                            languages,
                            showcasing my ability
                            to adapt and excel in diverse development environments</p>

                        <div class="space-y-3.5">
                            {{-- html --}}
                            <div>
                                <p class="text-sm mb-1">HTML</p>

                                <div x-data="{ show: false }" x-intersect:enter="show = true"
                                    class="relative h-[5px] w-full rounded-2xl bg-teal-200">

                                    <!-- Progress Bar -->
                                    <div class="bg-teal-500 absolute top-0 left-0 h-full rounded-2xl transition-all duration-[2s] ease-out "
                                        :class="{ 'w-[0%]': !show, 'w-[98%]': show }">

                                        <!-- Tooltip -->
                                        <span :class="{ 'opacity-100': show, 'opacity-0': !show }"
                                            class="absolute bg-teal-500 text-xs text-white rounded-sm right-0 bottom-full mb-2 px-2 py-1 translate-x-1/2 transition-opacity duration-700 ease-out">
                                            <span
                                                class="absolute bg-teal-500 w-2 h-2 left-1/2 -translate-x-1/2 top-full -translate-y-1/2 rotate-45 -z-10"></span>
                                            98%
                                        </span>
                                    </div>
                                </div>
                            </div>


                            {{-- Tailwind Css --}}
                            <div>
                                <p class="text-sm mb-1">Tailwind Css</p>
                                <div x-data="{ show: false }" x-intersect:enter="show = true"
                                    class="relative h-[5px] w-full rounded-2xl bg-teal-200">

                                    <!-- Progress Bar -->
                                    <div class="bg-teal-500 absolute top-0 left-0 h-full rounded-2xl transition-all duration-[2s] delay-200 ease-out "
                                        :class="{ 'w-[0%]': !show, 'w-[95%]': show }">

                                        <!-- Tooltip -->
                                        <span :class="{ 'opacity-100': show, 'opacity-0': !show }"
                                            class="absolute bg-teal-500 text-xs text-white rounded-sm right-0 bottom-full mb-2 px-2 py-1 translate-x-1/2 transition-opacity duration-700 ease-out">
                                            <span
                                                class="absolute bg-teal-500 w-2 h-2 left-1/2 -translate-x-1/2 top-full -translate-y-1/2 rotate-45 -z-10"></span>
                                            95%
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {{-- React Js --}}
                            <div>
                                <p class="text-sm mb-1">React Js</p>
                                <div x-data="{ show: false }" x-intersect:enter="show = true"
                                    class="relative h-[5px] w-full rounded-2xl bg-teal-200">

                                    <!-- Progress Bar -->
                                    <div class="bg-teal-500 absolute top-0 left-0 h-full rounded-2xl transition-all duration-[2s] delay-[400ms] ease-out "
                                        :class="{ 'w-[0%]': !show, 'w-[70%]': show }">

                                        <!-- Tooltip -->
                                        <span :class="{ 'opacity-100': show, 'opacity-0': !show }"
                                            class="absolute bg-teal-500 text-xs text-white rounded-sm right-0 bottom-full mb-2 px-2 py-1 translate-x-1/2 transition-opacity duration-700 ease-out">
                                            <span
                                                class="absolute bg-teal-500 w-2 h-2 left-1/2 -translate-x-1/2 top-full -translate-y-1/2 rotate-45 -z-10"></span>
                                            70%
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {{-- Alpine Js --}}
                            <div>
                                <p class="text-sm mb-1">Alpine Js</p>
                                <div x-data="{ show: false }" x-intersect:enter="show = true"
                                    class="relative h-[5px] w-full rounded-2xl bg-teal-200">

                                    <!-- Progress Bar -->
                                    <div class="bg-teal-500 absolute top-0 left-0 h-full rounded-2xl transition-all duration-[2s] delay-[600ms] ease-out "
                                        :class="{ 'w-[0%]': !show, 'w-[80%]': show }">

                                        <!-- Tooltip -->
                                        <span :class="{ 'opacity-100': show, 'opacity-0': !show }"
                                            class="absolute bg-teal-500 text-xs text-white rounded-sm right-0 bottom-full mb-2 px-2 py-1 translate-x-1/2 transition-opacity duration-700 ease-out">
                                            <span
                                                class="absolute bg-teal-500 w-2 h-2 left-1/2 -translate-x-1/2 top-full -translate-y-1/2 rotate-45 -z-10"></span>
                                            80%
                                        </span>
                                    </div>
                                </div>
                            </div>

                            {{-- Laravel --}}
                            <div>
                                <p class="text-sm mb-1">Laravel</p>
                                <div x-data="{ show: false }" x-intersect:enter="show = true"
                                    class="relative h-[5px] w-full rounded-2xl bg-teal-200">

                                    <!-- Progress Bar -->
                                    <div class="bg-teal-500 absolute top-0 left-0 h-full rounded-2xl transition-all duration-[2s] delay-[800ms] ease-out "
                                        :class="{ 'w-[0%]': !show, 'w-[60%]': show }">

                                        <!-- Tooltip -->
                                        <span :class="{ 'opacity-100': show, 'opacity-0': !show }"
                                            class="absolute bg-teal-500 text-xs text-white rounded-sm right-0 bottom-full mb-2 px-2 py-1 translate-x-1/2 transition-opacity duration-700 ease-out">
                                            <span
                                                class="absolute bg-teal-500 w-2 h-2 left-1/2 -translate-x-1/2 top-full -translate-y-1/2 rotate-45 -z-10"></span>
                                            60%
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="min-h-[65svh] bg-contain bg-no-repeat bg-center"
                        style="background-image: url({{ asset('images/skills.svg') }})">
                    </div>
                </div>
            </section>
            {{-- end about me --}}


            <div class="px-6 sm:px-10 md:px-14 lg:px-20 bg-teal-950 rounded-t-[20px] md:rounded-t-[32px] py-20">
                {{-- services --}}
                <section id="services">
                    {{-- services one --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-10">
                        <div class="min-h-[60svh] bg-contain bg-no-repeat bg-center"
                            style="background-image: url({{ asset('images/services.svg') }})"></div>
                        <div>
                            <p class="font-medium text-slate-100 text-3xl">What I Bring to the Table as a</p>
                            <div
                                class="italic w-fit mb-5 font-medium relative before:absolute before:w-[70%] before:h-[2px] before:bg-teal-500 before:rounded-full before:top-full">
                                Full-stack developer</div>

                            <p class="text-sm tracking-wide">
                                jonahdevs offers end-to-end development expertise, handling both frontend and backend
                                tasks
                                to
                                create
                                seamless, user-friendly, and scalable applications. With proficiency in diverse
                                technologies
                                like Alpine.js, Laravel, and modern database systems, I build efficient, secure, and
                                maintainable solutions tailored to client needs. I excel in API development, performance
                                optimization, and integrating third-party services while prioritizing user experience
                                and
                                accessibility. My ability to collaborate across teams, solve complex problems, and
                                oversee
                                the
                                full development lifecycle ensures high-quality results and continuous improvement in
                                every
                                project.
                            </p>
                        </div>
                    </div>


                    {{-- Services two --}}
                    <p class="text-center mt-20 mb-10 font-medium text-3xl text-slate-100">Services Overview</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">

                        {{-- 1 --}}
                        <div
                            class="flex flex-col items-center justify-center py-10 px-10 border border-teal-100 rounded hover:shadow-md hover:shadow-green-600 transition-all ease-in-out duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-laptop size-10 shrink-0 text-teal-100" viewBox="0 0 16 16">
                                <path
                                    d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5" />
                            </svg>
                            <p class="font-medium text-slate-100 text-center mt-1 mb-2">Web Development</p>
                            <p class="text-center text-sm tracking-wide">Design and develop responsive, scalable, and
                                user-friendly web
                                applications using modern
                                front-end and back-end technologies.</p>
                        </div>

                        {{-- 2 --}}
                        <div
                            class="flex flex-col items-center justify-center py-10 px-10 border border-teal-100 rounded hover:shadow-md hover:shadow-green-600 transition-all ease-in-out duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-usb-symbol size-10 text-teal-100 shrink-0" viewBox="0 0 16 16">
                                <path
                                    d="m7.792.312-1.533 2.3A.25.25 0 0 0 6.467 3H7.5v7.319a2.5 2.5 0 0 0-.515-.298L5.909 9.56A1.5 1.5 0 0 1 5 8.18v-.266a1.5 1.5 0 1 0-1 0v.266a2.5 2.5 0 0 0 1.515 2.298l1.076.461a1.5 1.5 0 0 1 .888 1.129 2.001 2.001 0 1 0 1.021-.006v-.902a1.5 1.5 0 0 1 .756-1.303l1.484-.848A2.5 2.5 0 0 0 11.995 7h.755a.25.25 0 0 0 .25-.25v-2.5a.25.25 0 0 0-.25-.25h-2.5a.25.25 0 0 0-.25.25v2.5c0 .138.112.25.25.25h.741a1.5 1.5 0 0 1-.747 1.142L8.76 8.99a3 3 0 0 0-.26.17V3h1.033a.25.25 0 0 0 .208-.389L8.208.312a.25.25 0 0 0-.416 0" />
                            </svg>
                            <p class="font-medium text-slate-100 text-center mt-1 mb-2">Api development & Integration
                            </p>
                            <p class="text-center text-sm tracking-wide">Create robust Restful or GraphQL APIs and
                                integrate a third-party APIs
                                to enable seamless
                                communication between services</p>
                        </div>

                        {{-- 3 --}}
                        <div
                            class="flex flex-col items-center justify-center py-10 px-10 border border-teal-100 rounded hover:shadow-md hover:shadow-green-600 transition-all ease-in-out duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-window size-10 text-teal-100 shrink-0" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                                <path
                                    d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1M2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1z" />
                            </svg>
                            <p class="font-medium text-slate-100 text-center mt-1 mb-2">Fron-end Development</p>
                            <p class="text-center text-sm tracking-wide">Build dynamic and interactive user interfaces
                                with
                                optimized
                                performance..</p>
                        </div>

                        {{-- 4 --}}
                        <div
                            class="flex flex-col items-center justify-center py-10 px-10 border border-teal-100 rounded hover:shadow-md hover:shadow-green-600 transition-all ease-in-out duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-server size-10 text-teal-100 shrink-0" viewBox="0 0 16 16">
                                <path
                                    d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4z" />
                                <path
                                    d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.5 6.5 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8s-3.809-.317-5.208-.876a6.5 6.5 0 0 1-1.458-.79z" />
                                <path
                                    d="M14.667 11.668a6.5 6.5 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.5 6.5 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667z" />
                            </svg>
                            <p class="font-medium text-slate-100 text-center mt-1 mb-2">Back-end Development</p>
                            <p class="text-center text-sm tracking-wide">Develop secure and efficient server side logic
                                and
                                ensuring high
                                performance and data
                                inegrity.</p>
                        </div>

                        {{-- 5 --}}
                        <div
                            class="flex flex-col items-center justify-center py-10 px-10 border border-teal-100 rounded hover:shadow-md hover:shadow-green-600 transition-all ease-in-out duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-database size-10 text-sky-100 shrink-0" viewBox="0 0 16 16">
                                <path
                                    d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313M13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A5 5 0 0 0 13 5.698M14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A5 5 0 0 0 13 8.698m0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525" />
                            </svg>
                            <p class="font-medium text-slate-100 text-center mt-1 mb-2">Database Design and Management
                            </p>
                            <p class="text-center text-sm tracking-wide">Design and develop responsive, scalable, and
                                user-friendly web
                                applications using modern
                                front-end and back-end technologies.</p>
                        </div>

                        {{-- 6 --}}
                        <div
                            class="flex flex-col items-center justify-center py-10 px-10 border border-teal-100 rounded hover:shadow-md hover:shadow-green-600 transition-all ease-in-out duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-code-square size-10 text-sky-100 shrink-0" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                <path
                                    d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0m2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0" />
                            </svg>
                            <p class="font-medium text-slate-100 text-center mt-1 mb-2">Custom Software Development</p>
                            <p class="text-center text-sm tracking-wide">Develop tailored software solutions to meet
                                unique
                                business requirements and process.</p>
                        </div>
                    </div>
                </section>
                {{-- end services --}}

                {{-- projects --}}
                <section id="projects">
                    <p class="text-center mt-20 mb-10 font-medium text-3xl text-slate-100">Projects
                        Overview</p>
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                        {{-- 1 --}}
                        <div x-data="{ modalIsOpen: false }"
                            class="h-full max-h-72 rounded relative overflow-hidden group border border-transparent hover:border-teal-700">
                            <div @click="modalIsOpen = true"
                                class="absolute inset-0 bg-teal-800 opacity-0  group-hover:opacity-100 flex items-center justify-center cursor-pointer">
                                <span
                                    class="text-teal-200 text-lg font-medium -translate-y-5 group-hover:translate-y-0 ease-in-out duration-500 transition-all">Shopsmart
                                    Ecommerce</span>
                            </div>

                            <img src="https://i.pinimg.com/736x/67/b4/09/67b409bfb7c55f7ee6ca773096739d2f.jpg"
                                alt="ecommerce" class="h-full w-full object-cover object-center">

                            <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms
                                x-trap.inert.noscroll="modalIsOpen" @keydown.esc.window="modalIsOpen = false"
                                @click.self="modalIsOpen = false"
                                class="fixed inset-0 z-30 flex items-start justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8 pt-10 overflow-y-scroll">

                                {{-- modal --}}
                                <div x-show="modalIsOpen"
                                    x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                                    x-transition:enter-start="opacity-0 scale-y-0"
                                    x-transition:enter-end="opacity-100 scale-y-100"
                                    class="w-full max-w-xl p-5 md:p-10 rounded border border-teal-800 bg-teal-950 relative ">

                                    {{-- close button --}}
                                    <button @click="modalIsOpen = false"
                                        class="absolute  right-0 top-0 -translate-y-1/2 translate-x-1/2 bg-teal-900 p-1 rounded border border-teal-800 outline-none ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="bi bi-x text-slate-300 size-4" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                        </svg>
                                    </button>

                                    <p class="font-medium text-2xl text-teal-400 text-center">Shopsmart Ecommerce</p>

                                    <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-y-2 tracking-wide text-sm">
                                        <div class="flex gap-2 flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-file-earmark-text size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                                                <path
                                                    d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                            </svg>
                                            <span>Name:</span>
                                            <span>Shopsmart</span>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-person size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                            </svg>
                                            <span>Client:</span>
                                            <span>Code practice</span>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-github size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                                            </svg>
                                            <span>Code:</span>
                                            <a href="https://github.com/JonahWakahiu/shopsmart"
                                                target="_blank">Shopsmart</a>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-calendar  size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                            </svg>
                                            <span>Published On:</span>
                                            <p>March 17, 2025</p>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-code-slash size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0" />
                                            </svg>
                                            <span>Languages:</span>
                                            <span class="slate-300space-break-spaces">Laravel, Alpine Js, MySQL</span>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-box-arrow-up-right size-4 shrink-0" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd"
                                                    d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                            <span>Preview:</span>
                                            <a href="https://shopsmart.jonahdevs.co.ke" target="_blank"
                                                class="hover:text-white">shopsmart</a>
                                        </div>
                                    </div>

                                    <div class="mt-5 w-full max-h-64 rounded-sm overflow-hidden">
                                        <img src="https://i.pinimg.com/736x/67/b4/09/67b409bfb7c55f7ee6ca773096739d2f.jpg"
                                            alt="ecommerce" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 2 --}}
                        <div x-data="{ modalIsOpen: false }"
                            class="h-full max-h-72 rounded relative overflow-hidden group border border-transparent hover:border-teal-700">
                            <div @click="modalIsOpen = true"
                                class="absolute inset-0 bg-teal-800 opacity-0  group-hover:opacity-100 flex items-center justify-center cursor-pointer">
                                <span
                                    class="text-teal-200 text-lg font-medium -translate-y-5 group-hover:translate-y-0 ease-in-out duration-500 transition-all">Room
                                    Management
                                </span>
                            </div>

                            <img src="https://i.pinimg.com/736x/39/2d/c6/392dc657a08c9f81913e5cb6130c3f39.jpg"
                                alt="ecommerce" class="h-full w-full object-cover object-center">

                            <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms
                                x-trap.inert.noscroll="modalIsOpen" @keydown.esc.window="modalIsOpen = false"
                                @click.self="modalIsOpen = false"
                                class="fixed inset-0 z-30 flex items-start justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8 pt-10 overflow-y-scroll">

                                {{-- modal --}}
                                <div x-show="modalIsOpen"
                                    x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                                    x-transition:enter-start="opacity-0 scale-y-0"
                                    x-transition:enter-end="opacity-100 scale-y-100"
                                    class="w-full max-w-xl p-5 sm:p-10 rounded border border-teal-800 bg-teal-950 relative">

                                    {{-- close button --}}
                                    <button @click="modalIsOpen = false"
                                        class="absolute  right-0 top-0 -translate-y-1/2 translate-x-1/2 bg-teal-900 p-1 rounded border border-teal-800 outline-none ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="bi bi-x text-slate-300 size-4" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                        </svg>
                                    </button>

                                    <p class="font-medium text-2xl text-teal-400 text-center">Room Management System
                                    </p>

                                    <div
                                        class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-y-2 gap-x-5 tracking-wide text-sm">
                                        <div class="flex gap-2 flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-file-earmark-text size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                                                <path
                                                    d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                            </svg>
                                            <span>Name:</span>
                                            <span>Delicay Hotel</span>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-person size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                            </svg>
                                            <span>Client:</span>
                                            <span>Code practice</span>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-github size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                                            </svg>
                                            <span>Code:</span>
                                            <a href="https://github.com/JonahWakahiu/shopsmart"
                                                target="_blank">Delicacy
                                                hotel</a>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-calendar  size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                            </svg>
                                            <span>Published On:</span>
                                            <a href="https://github.com/JonahWakahiu/shopsmart" target="_blank">Oct
                                                18,
                                                2024</a>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-code-slash size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0" />
                                            </svg>
                                            <span>Languages:</span>
                                            <span class="whitespace-break-spaces">Laravel, Livewire, MySQL, Tailwind
                                                Css</span>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-box-arrow-up-right size-4 shrink-0" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd"
                                                    d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                            <span>Preview:</span>
                                            <a href="{{ route('delicacy.home') }}"
                                                class="hover:text-white">delicacyhotel</a>
                                        </div>
                                    </div>

                                    <div class="mt-5 w-full max-h-64 rounded-sm overflow-hidden">
                                        <img src="https://i.pinimg.com/736x/39/2d/c6/392dc657a08c9f81913e5cb6130c3f39.jpg"
                                            alt="ecommerce" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 3 --}}
                        <div x-data="{ modalIsOpen: false }"
                            class="h-full max-h-72 rounded relative overflow-hidden group border border-transparent hover:border-teal-700">
                            <div @click="modalIsOpen = true"
                                class="absolute inset-0 bg-teal-800 opacity-0  group-hover:opacity-100 flex items-center justify-center cursor-pointer">
                                <span
                                    class="text-teal-200 text-lg font-medium -translate-y-5 group-hover:translate-y-0 ease-in-out duration-500 transition-all">Task
                                    Management</span>
                            </div>

                            <img src="https://i.pinimg.com/736x/9f/88/36/9f8836a8907d71eb27c14e4f15572c15.jpg"
                                alt="wifi_management" class="h-full w-full object-cover object-center">

                            <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms
                                x-trap.inert.noscroll="modalIsOpen" @keydown.esc.window="modalIsOpen = false"
                                @click.self="modalIsOpen = false"
                                class="fixed inset-0 z-30 flex items-start justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8 pt-10 overflow-y-scroll">

                                {{-- modal --}}
                                <div x-show="modalIsOpen"
                                    x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                                    x-transition:enter-start="opacity-0 scale-y-0"
                                    x-transition:enter-end="opacity-100 scale-y-100"
                                    class="w-full max-w-xl p-5 sm:p-10 rounded border border-teal-800 bg-teal-950 relative">

                                    {{-- close button --}}
                                    <button @click="modalIsOpen = false"
                                        class="absolute  right-0 top-0 -translate-y-1/2 translate-x-1/2 bg-teal-900 p-1 rounded border border-teal-800 outline-none ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            class="bi bi-x text-slate-300 size-4" viewBox="0 0 16 16">
                                            <path
                                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                        </svg>
                                    </button>

                                    <p class="font-medium text-2xl text-teal-400 text-center">Task Management System
                                    </p>

                                    <div class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-y-2 tracking-wide text-sm">
                                        <div class="flex gap-2 flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-file-earmark-text size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5" />
                                                <path
                                                    d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                            </svg>
                                            <span>Name:</span>
                                            <span>Task Management</span>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-person size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                            </svg>
                                            <span>Client:</span>
                                            <span>Code practice</span>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-github size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                                            </svg>
                                            <span>Code:</span>
                                            <a href="https://github.com/JonahWakahiu/wifimanagement"
                                                target="_blank">task-management</a>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-calendar  size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                            </svg>
                                            <span>Published On:</span>
                                            <p target="_blank">Oct 18, 2024</p>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-code-slash size-4 shrink-0" viewBox="0 0 16 16">
                                                <path
                                                    d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0" />
                                            </svg>
                                            <span>Languages:</span>
                                            <span class="whitespace-break-spaces">React</span>
                                        </div>

                                        <div class="flex gap-2  flex-wrap">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                class="bi bi-box-arrow-up-right size-4 shrink-0" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5" />
                                                <path fill-rule="evenodd"
                                                    d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z" />
                                            </svg>
                                            <span>Preview:</span>
                                            <a href="{{ route('taskflow.home') }}" class="hover:text-white">task
                                                management</a>
                                        </div>
                                    </div>

                                    <div class="mt-5 w-full max-h-64 rounded-sm overflow-hidden">
                                        <img src="https://i.pinimg.com/736x/9f/88/36/9f8836a8907d71eb27c14e4f15572c15.jpg"
                                            alt="ecommerce" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <section id="contact">
                <div x-data="contact" class="bg-cover bg-center"
                    style="background-image: url('https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
                    {{-- overlay --}}
                    <div
                        class="bg-black/50 py-10 lg:py-20 px-6 sm:px-10 md:px-14 lg:px-20 flex items-center justify-end">
                        <div class="bg-teal-100 rounded py-10 px-4 md:px-14 text-slate-700 w-full max-w-[600px]">
                            <p class="text-slate-800 font-medium text-lg mb-2">Lets connect 😊!</p>
                            <p class="text-sm tracking-wide">Feel free to get in touch with me. I am always open to
                                discussing new projects, creative ideas or
                                opportunities to be part of your visions.</p>

                            <form @submit.prevent="sendMessage($event)" class="space-y-3 mt-10">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-5 gap-y-3">
                                    <div>
                                        <x-forms.text-input name="firstName" placeholder="First Name"
                                            ::disabled="isSubmitting" />
                                        <template x-if="errors.firstName">
                                            <span class="text-red-500 text-sm mt-1" x-text="errors.firstName"></span>
                                        </template>
                                    </div>

                                    <div>
                                        <x-forms.text-input name="lastName" placeholder="Last Name"
                                            ::disabled="isSubmitting" />
                                        <template x-if="errors.lastName">
                                            <span class="text-red-500 text-sm mt-1" x-text="errors.lastName"></span>
                                        </template>
                                    </div>
                                </div>

                                <div>
                                    <x-forms.text-input name="email" placeholder="Email" ::disabled="isSubmitting" />
                                    <template x-if="errors.email">
                                        <span class="text-red-500 text-sm mt-1" x-text="errors.email"></span>
                                    </template>
                                </div>

                                <div>
                                    <x-forms.text-input name="subject" placeholder="Subject" ::disabled="isSubmitting" />
                                    <template x-if="errors.subject">
                                        <span class="text-red-500 text-sm mt-1" x-text="errors.subject"></span>
                                    </template>
                                </div>

                                <div>
                                    <x-forms.textarea name="message" placeholder="Your message..."
                                        ::disabled="isSubmitting"></x-forms.textarea>
                                    <template x-if="errors.message">
                                        <span class="text-red-500 text-sm mt-1" x-text="errors.message"></span>
                                    </template>
                                </div>

                                <div>
                                    <button type="submit" :disabled="isSubmitting"
                                        class="px-5 rounded-full py-2 bg-teal-800 hover:bg-teal-800/90 text-slate-100 inline-flex items-center gap-3 disabled:opacity-50 disabled:cursor-not-allowed">
                                        <span>Send Message</span>
                                        <svg x-cloak x-show="!isSubmitting" xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-send"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                                        </svg>

                                        <svg x-cloak x-show="isSubmitting" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" aria-hidden="true"
                                            class="size-5 fill-neutral-600 motion-safe:animate-spin dark:fill-neutral-300">
                                            <path
                                                d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"
                                                opacity=".25" />
                                            <path
                                                d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z" />
                                        </svg>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- success pop message --}}
                    <div x-cloak x-show="messageSent"
                        class="fixed max-w-72 right-5 bottom-5 z-20 pointer-events-auto  rounded-md border border-green-500 bg-white text-neutral-600 dark:bg-neutral-950 dark:text-neutral-300"
                        x-transition:enter="transition duration-300 ease-out" x-transition:enter-end="translate-y-0"
                        x-transition:enter-start="translate-y-8" x-transition:leave="transition duration-300 ease-in"
                        x-transition:leave-end="-translate-x-24 opacity-0 md:translate-x-24"
                        x-transition:leave-start="translate-x-0 opacity-100">
                        <div
                            class="flex w-full items-center gap-2.5 bg-green-500/10 rounded-md p-4 transition-all duration-300">

                            <!-- Icon -->
                            <div class="rounded-full bg-green-500/15 p-0.5 text-green-500" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>

                            <!-- Title & Message -->
                            <div class="flex flex-col gap-2">
                                <h3 class="text-sm font-semibold text-green-500">Success</h3>
                                <p class="text-pretty text-sm">We’ve received your message and will
                                    respond
                                    shortly. Thank you for reaching out!</p>
                            </div>

                            <!--Dismiss Button -->
                            <button type="button" class="ml-auto" @click="messageSent = false">
                                <svg xmlns="http://www.w3.org/2000/svg viewBox="0 0 24 24 stroke="currentColor"
                                    fill="none" stroke-width="2" class="size-5 shrink-0" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- error message --}}
                    <div x-cloak x-show="messageFailed"
                        class="fixed max-w-72 right-5 bottom-5 z-20 pointer-events-auto  rounded-md border border-red-500 bg-white text-neutral-600 dark:bg-neutral-950 dark:text-neutral-300"
                        x-transition:enter="transition duration-300 ease-out" x-transition:enter-end="translate-y-0"
                        x-transition:enter-start="translate-y-8" x-transition:leave="transition duration-300 ease-in"
                        x-transition:leave-end="-translate-x-24 opacity-0 md:translate-x-24"
                        x-transition:leave-start="translate-x-0 opacity-100">
                        <div
                            class="flex w-full items-center gap-2.5 bg-red-500/10 rounded-md p-4 transition-all duration-300">

                            <!-- Icon -->
                            <div class="rounded-full bg-red-500/15 p-0.5 text-red-500" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                    class="size-5" aria-hidden="true">
                                    <path fill-rule="evenodd" d=" M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-8-5a.75.75 0 0 1 .75.75v4.5a.75.75 0
                        0 1-1.5 0v-4.5A.75.75 0 0 1 10 5Zm0 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" />
                                </svg>
                            </div>

                            <!-- Title & Message -->
                            <div class="flex flex-col gap-2">
                                <h3 class="text-sm font-semibold text-red-500">Oops!</h3>
                                <p class="text-pretty text-sm">Something went wrong. Please try again. If the problem
                                    persists, we’re here to help!</p>
                            </div>

                            <!--Dismiss Button -->
                            <button type="button" class="ml-auto" @click="messageFailed = false">
                                <svg xmlns="http://www.w3.org/2000/svg viewBox="0 0 24 24 stroke="currentColor"
                                    fill="none" stroke-width="2" class="size-5 shrink-0" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>


    @include('portfolio.footer')

    @push('scripts')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('contact', () => ({
                    errors: {},
                    isSubmitting: false,
                    messageSent: false,
                    messageFailed: false,

                    async sendMessage(event) {
                        try {
                            const formData = new FormData(event.target);
                            this.errors = {};
                            this.isSubmitting = true;
                            this.messageSent = false;
                            this.messageFailed = false;

                            const response = await axios.post('{{ route('send.message') }}', formData);

                            if (response.status === 200) {
                                event.target.reset();
                                this.isSubmitting = false;
                                this.messageSent = true;

                                setTimeout(() => {
                                    this.messageSent = false
                                }, 10000);
                            }

                        } catch (error) {
                            this.isSubmitting = false;

                            if (error.response && error.response.status === 422) {
                                this.errors = error.response.data.errors;
                            } else {
                                this.messageFailed = true;

                                setTimeout(() => {
                                    this.messageFailed = false;
                                }, 10000);
                            }
                        }
                    }
                }))
            })
        </script>
    @endpush

</x-app-layout>
