<x-layouts.web :title="__('Home Page')">
    <section class="w-full bg-no-repeat bg-cover p-3" style="background-image: url({{ asset('web/background-images/main-bg.webp') }})">
        <div class="lg:container md:p-16 p-3 mx-auto">
            <div class="bg-white max-w-md rounded-lg py-10 px-8 text-blue-900">
                <h1 class="text-4xl font-bold">{{ __('web/home/main.heading') }}</h1>
                <p class="text-lg text-gray-500 my-5">{{ __('web/home/main.description') }}</p>
                <button class="border-2 block mx-auto border-yellow-400 px-8 py-3 font-bold hover:bg-yellow-400 hover:text-white">{{ __('web/menu-bar.contactUs') }}</button>
            </div>
        </div>
    </section>
    <section class="w-full px-4 py-16">
        <div class="2xl:container mx-auto flex flex-col md:flex-row gap-10">
            <div class="md:w-1/2 w-full md:h-auto h-[500px] flex gap-x-5 relative">
                <div class="bg-white place-self-end w-[102px] aspect-square">
                    <span dir="ltr" class="text-6xl block text-blue-900 font-bold">10<span class="text-yellow-400">+</span></span>
                    <span class="block">{{ __('web/home/about.experience') }}</span>
                </div>
                <div class="w-full h-full bg-cover" style="background-image: url({{ asset('web/background-images/about-bg-2.jpg') }});"></div>
                <div class="w-1/2 border-y-[20px] ltr:border-r-[20px] rtl:border-l-[20px] border-white absolute translate-y-[120px] bg-cover" style="height: calc(100% - 240px); background-image:url({{ asset('web/background-images/about-bg-1.webp') }})"></div>
            </div>
            <div class="md:w-1/2">
                <h1 class="text-4xl font-bold text-blue-900">{{ __('web/home/about.heading') }}</h1>
                <p class="text-lg text-gray-500 my-5">{{ __('web/home/about.description') }}</p>
                <div class="w-full flex flex-col lg:flex-row  gap-16">
                    <div class="lg:w-1/2">
                        <div class="w-fit mb-5 p-3 aspect-square bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <span class="material-symbols-outlined text-6xl">history_toggle_off</span>
                        </div>
                        <p class="text-xl mb-3 font-bold text-blue-900 not-italic">{{ __('web/home/about.serviceTitle') }}</p>
                        <p class="text-gray-500 text-lg not-italic text-justify">{{ __('web/home/about.serviceDescription') }}</p>
                    </div>
                    <div class="lg:w-1/2">
                        <div class="w-fit mb-5 p-3 aspect-square bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <span class="material-symbols-outlined text-6xl">groups</span>
                        </div>
                        <p class="text-xl mb-3 font-bold text-blue-900 not-italic">{{ __('web/home/about.teamTitle') }}</p>
                        <p class="text-gray-500 text-lg not-italic text-justify">{{ __('web/home/about.teamDescription') }}</p>
                    </div>
                </div>
                <button class="border-2 mt-8 block mx-auto border-yellow-400 px-8 text-blue-900 py-3 font-bold hover:bg-yellow-500 hover:text-white">{{ __('web/home/about.aboutUs') }}</button>
            </div>
        </div>
    </section>
    <section class="bg-cover" style="background-image:url({{ asset('web/background-images/services.webp') }})">
        <div class="w-full h-full bg-black bg-opacity-80">
            <div class="xl:container mx-auto py-16 px-3">
                <h1 class="text-center text-4xl font-bold text-white">{{ __('web/home/services.title') }}</h1>
                <h1 class="text-center text-lg max-w-4xl mx-auto text-white my-6">{{ __('web/home/services.description') }}</h1>
                <section class="grid md:grid-cols-2 lg:grid-cols-3 gap-16">
                    <article class="flex flex-col gap-5 w-full items-center">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center w-fit">
                            <span class="material-symbols-outlined text-6xl">electrical_services</span>
                        </div>
                        <h2 class="text-lg font-bold text-yellow-400">{{ __('web/home/services.electricalWiring') }}</h2>
                        <p class="text-gray-200 text-justify" style="text-align-last: center;">{{ __('web/home/services.electricalWiringDescription') }}</p>
                    </article>
                    <article class="flex flex-col gap-5 w-full items-center">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center w-fit">
                            <span class="material-symbols-outlined text-6xl">cable</span>
                        </div>
                        <h2 class="text-lg font-bold text-yellow-400">{{ __('web/home/services.electricalWiring') }}</h2>
                        <p class="text-gray-200 text-justify" style="text-align-last: center;">{{ __('web/home/services.electricalWiringDescription') }}</p>
                    </article>
                    <article class="flex flex-col gap-5 w-full items-center">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center w-fit">
                            <span class="material-symbols-outlined text-6xl">cable</span>
                        </div>
                        <h2 class="text-lg font-bold text-yellow-400">{{ __('web/home/services.electricalWiring') }}</h2>
                        <p class="text-gray-200 text-justify" style="text-align-last: center;">{{ __('web/home/services.electricalWiringDescription') }}</p>
                    </article>
                </section>
            </div>
        </div>
    </section>
    <section class="ppx-3 bg-blue-900 py-16">
        <div class="xl:container mx-auto grid lg:grid-cols-2 gap-12">
            <div>
                <h2 class="text-yellow-400 text-6xl mb-4 font-bold">{{ __('web/home/pricing.title') }}</h2>
                <p class="text-white text-xl">{{ __('web/home/pricing.description') }}</p>
            </div>
            <div class="flex w-full bg-white">
                <div class="bg-yellow-400 w-1/2 h-full flex flex-col justify-center items-center gap-2 py-10">
                    <span class="text-blue-900 text-6xl font-bold ">$200</span>
                    <span class="text-white text-2xl">Anally</span>
                    <a href="#" class="text-blue-900 text-xl flex items-center justify-center gap-2 ">Read More
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 -960 960 960">
                            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h560v-280h80v280q0 33-23.5 56.5T760-120H200Zm188-212-56-56 372-372H560v-80h280v280h-80v-144L388-332Z" />
                        </svg>
                    </a>
                </div>
                <div>
                    <ul class="list-inside list-image-[url({{ asset('web/background-images/about-bg-1.webp') }})]">
                        <li>alkjsdflk as</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="lg:container m-auto py-14 p-3">
        <div class="flex gap-6 flex-col md:flex-row items-center p-3">
            <h1 class="text-4xl md:w-1/2 text-blue-900 font-bold">{{ __('web/home/latest-projects.title') }}</h1>
            <p class="md:w-1/2 text-xl">{{ __('web/home/latest-projects.description') }}</p>
        </div>
        <section class="my-8 grid sm:grid-cols-2 xl:grid-cols-4 gap-x-10 gap-y-16">
            <div class="w-full relative">
                <img class="w-full aspect-[1.3]" src="{{ asset('web/card-images/latest-01.jpg') }}" alt="{{ __('web/home/latest-projects.ElectricalSecurity') }}" loading="lazy" deffer>
                <h1 class="text-xl bg-blue-900 text-center py-4 w-5/6 m-auto text-white absolute -translate-y-1/2 left-1/2 -translate-x-1/2">{{ __('web/home/latest-projects.ElectricalSecurity') }}</h1>
            </div>
            <div class="w-full relative">
                <img class="w-full aspect-[1.3]" src="{{ asset('web/card-images/latest-01.jpg') }}" alt="{{ __('web/home/latest-projects.ElectricalSecurity') }}" loading="lazy" deffer>
                <h1 class="text-xl bg-blue-900 text-center py-4 w-5/6 m-auto text-white absolute -translate-y-1/2 left-1/2 -translate-x-1/2">{{ __('web/home/latest-projects.ElectricalSecurity') }}</h1>
            </div>
            <div class="w-full relative">
                <img class="w-full aspect-[1.3]" src="{{ asset('web/card-images/latest-01.jpg') }}" alt="{{ __('web/home/latest-projects.ElectricalSecurity') }}" loading="lazy" deffer>
                <h1 class="text-xl bg-blue-900 text-center py-4 w-5/6 m-auto text-white absolute -translate-y-1/2 left-1/2 -translate-x-1/2">{{ __('web/home/latest-projects.ElectricalSecurity') }}</h1>
            </div>
            <div class="w-full relative">
                <img class="w-full aspect-[1.3]" src="{{ asset('web/card-images/latest-01.jpg') }}" alt="{{ __('web/home/latest-projects.ElectricalSecurity') }}" loading="lazy" deffer>
                <h1 class="text-xl bg-blue-900 text-center py-4 w-5/6 m-auto text-white absolute -translate-y-1/2 left-1/2 -translate-x-1/2">{{ __('web/home/latest-projects.ElectricalSecurity') }}</h1>
            </div>
        </section>
    </section>
</x-layouts.web>
