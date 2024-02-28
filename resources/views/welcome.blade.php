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
    <section class="w-full px-3 py-16">
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
                        <div class="w-16 mb-5 aspect-square bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg width="36" height="36" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xl mb-3 font-bold text-blue-900 not-italic">{{ __('web/home/about.serviceTitle') }}</p>
                            <p class="text-gray-500 text-lg not-italic">{{ __('web/home/about.serviceDescription') }}</p>
                        </div>
                    </div>
                    <div class="lg:w-1/2">
                        <div class="w-16 mb-5 aspect-square bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg width="36" height="36" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xl mb-3 font-bold text-blue-900 not-italic">{{ __('web/home/about.teamTitle') }}</p>
                            <p class="text-gray-500 text-lg not-italic">{{ __('web/home/about.teamDescription') }}</p>
                        </div>
                    </div>
                </div>
                <button class="border-2 mt-8 block mx-auto border-yellow-400 px-8 text-blue-900 py-3 font-bold hover:bg-yellow-500 hover:text-white">{{ __('web/home/about.aboutUs') }}</button>
            </div>
        </div>
    </section>
    <section class="bg-cover" style="background-image:url({{ asset('web/background-images/services.webp') }})">
        <div class="w-full h-full" style="background-color: rgba(0, 0, 0, 0.8);">
            <div class="xl:container mx-auto py-16 px-3">
                <h1 class="text-center text-4xl font-bold text-white">{{ __('web/home/services.title') }}</h1>
                <h1 class="text-center text-lg max-w-4xl mx-auto text-white my-5">{{ __('web/home/services.description') }}</h1>
                <section class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="flex xs:flex-row flex-col items-start gap-y-4 py-5 w-full">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 -960 960 960">
                                <path d="m456-200 174-340H510v-220L330-420h126v220Zm24 120q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                            </svg>
                        </div>
                        <div class="xs:px-5">
                            <h3 class="text-lg mb-3 font-bold text-yellow-400">{{ __('web/home/services.electricalPanelUpgrades') }}</h3>
                            <p class="text-gray-200">{{ __('web/home/services.electricalPanelUpgradesDescription') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start xs:flex-row flex-col py-5 gap-y-4 w-full">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 -960 960 960">
                                <path d="M720-360v-80h80q17 0 28.5 11.5T840-400q0 17-11.5 28.5T800-360h-80Zm0 160v-80h80q17 0 28.5 11.5T840-240q0 17-11.5 28.5T800-200h-80Zm-160 40q-33 0-56.5-23.5T480-240h-80v-160h80q0-33 23.5-56.5T560-480h120v320H560ZM280-280q-66 0-113-47t-47-113q0-66 47-113t113-47h60q25 0 42.5-17.5T400-660q0-25-17.5-42.5T340-720H200q-17 0-28.5-11.5T160-760q0-17 11.5-28.5T200-800h140q58 0 99 41t41 99q0 58-41 99t-99 41h-60q-33 0-56.5 23.5T200-440q0 33 23.5 56.5T280-360h80v80h-80Z" />
                            </svg>
                        </div>
                        <div class="xs:px-5">
                            <h3 class="text-lg mb-3 font-bold text-yellow-400">{{ __('web/home/services.electricalRepairsAndMaintenance') }}</h3>
                            <p class="text-gray-200">{{ __('web/home/services.electricalRepairsAndMaintenanceDescription') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start xs:flex-row flex-col py-5 gap-y-4 w-full">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 -960 960 960">
                                <path d="M360-82v-100q-106-37-173-129.5T120-522q0-75 28.5-140.5t77-114q48.5-48.5 114-77T479-882q74 0 140 28.5t115 77q49 48.5 77.5 114T840-522q0 118-67.5 209.5T600-183v101h-80v-82q-10 2-20 2h-21q-10 0-19.5-.5T440-164v82h-80Zm120-158q116 0 198-82t82-198q0-116-82-198t-198-82q-116 0-198 82t-82 198q0 116 82 198t198 82ZM320-600h320v-80H320v80Zm130 320 120-120-50-50 50-50-60-60-120 120 50 50-50 50 60 60Zm30-240Z" />
                            </svg>
                        </div>
                        <div class="xs:px-5">
                            <h3 class="text-lg mb-3 font-bold text-yellow-400">{{ __('web/home/services.electricalSafetyInspections') }}</h3>
                            <p class="text-gray-200">{{ __('web/home/services.electricalSafetyInspectionsDescription') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start xs:flex-row flex-col py-5 gap-y-4 w-full">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 -960 960 960">
                                <path d="M120-160v-80h110l-16-14q-52-46-73-105t-21-119q0-111 66.5-197.5T360-790v84q-72 26-116 88.5T200-478q0 45 17 87.5t53 78.5l10 10v-98h80v240H120Zm360-120q-17 0-28.5-11.5T440-320q0-17 11.5-28.5T480-360q17 0 28.5 11.5T520-320q0 17-11.5 28.5T480-280Zm-40-160v-240h80v240h-80Zm160 270v-84q72-26 116-88.5T760-482q0-45-17-87.5T690-648l-10-10v98h-80v-240h240v80H730l16 14q49 49 71.5 106.5T840-482q0 111-66.5 197.5T600-170Z" />
                            </svg>
                        </div>
                        <div class="xs:px-5">
                            <h3 class="text-lg mb-3 font-bold text-yellow-400">{{ __('web/home/services.electricalWiringAndInstallation') }}</h3>
                            <p class="text-gray-200">{{ __('web/home/services.electricalWiringAndInstallationDescription') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start xs:flex-row flex-col py-5 gap-y-4 w-full">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 -960 960 960">
                                <path d="M80-360v-80h200v-40h-80q-17 0-28.5-11.5T160-520q0-17 11.5-28.5T200-560h80q33 0 56.5 23.5T360-480v40h80v-276q0-69 48-116.5T605-880q46 0 85 24t60 66l46 92-72 36-46-92q-11-21-31-33.5T604-800q-35 0-59.5 24.5T520-716v276h80v-40q0-33 23.5-56.5T680-560h80q17 0 28.5 11.5T800-520q0 17-11.5 28.5T760-480h-80v40h200v80H80Zm160 240q-33 0-56.5-23.5T160-200v-160h80v160h480v-160h80v160q0 33-23.5 56.5T720-120H240Z" />
                            </svg>
                        </div>
                        <div class="xs:px-5">
                            <h3 class="text-lg mb-3 font-bold text-yellow-400">{{ __('web/home/services.generalPlumbingRepairs') }}</h3>
                            <p class="text-gray-200">{{ __('web/home/services.generalPlumbingRepairsDescription') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start xs:flex-row flex-col py-5 gap-y-4 w-full">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 -960 960 960">
                                <path d="M240-400q0 52 21 98.5t60 81.5q-1-5-1-9v-9q0-32 12-60t35-51l113-111 113 111q23 23 35 51t12 60v9q0 4-1 9 39-35 60-81.5t21-98.5q0-50-18.5-94.5T648-574q-20 13-42 19.5t-45 6.5q-62 0-107.5-41T401-690q-39 33-69 68.5t-50.5 72Q261-513 250.5-475T240-400Zm240 52-57 56q-11 11-17 25t-6 29q0 32 23.5 55t56.5 23q33 0 56.5-23t23.5-55q0-16-6-29.5T537-292l-57-56Zm0-492v132q0 34 23.5 57t57.5 23q18 0 33.5-7.5T622-658l18-22q74 42 117 117t43 163q0 134-93 227T480-80q-134 0-227-93t-93-227q0-129 86.5-245T480-840Z" />
                            </svg>
                        </div>
                        <div class="xs:px-5">
                            <h3 class="text-lg mb-3 font-bold text-yellow-400">{{ __('web/home/services.gasLineInstallationAndRepair') }}</h3>
                            <p class="text-gray-200">{{ __('web/home/services.gasLineInstallationAndRepairDescription') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start xs:flex-row flex-col py-5 gap-y-4 w-full">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 -960 960 960">
                                <path d="M440-640v-120H280v-80h400v80H520v120h-80ZM160-120v-320h80v40h120v-120h-40v-80h320v80h-40v120h120v-40h80v320h-80v-40H240v40h-80Zm80-120h480v-80H520v-200h-80v200H240v80Zm240 0Z" />
                            </svg>
                        </div>
                        <div class="xs:px-5">
                            <h3 class="text-lg mb-3 font-bold text-yellow-400">{{ __('web/home/services.plumbingForNewConstruction') }}</h3>
                            <p class="text-gray-200">{{ __('web/home/services.plumbingForNewConstructionDescription') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start xs:flex-row flex-col py-5 gap-y-4 w-full">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 -960 960 960">
                                <path d="M440-160q-17 0-28.5-11.5T400-200v-240L168-736q-15-20-4.5-42t36.5-22h560q26 0 36.5 22t-4.5 42L560-440v240q0 17-11.5 28.5T520-160h-80Zm40-308 198-252H282l198 252Zm0 0Z" />
                            </svg>
                        </div>
                        <div class="xs:px-5">
                            <h3 class="text-lg mb-3 font-bold text-yellow-400">{{ __('web/home/services.waterFiltrationAndPurification') }}</h3>
                            <p class="text-gray-200">{{ __('web/home/services.waterFiltrationAndPurificationDescription') }}</p>
                        </div>
                    </div>
                    <div class="flex items-start xs:flex-row flex-col py-5 gap-y-4 w-full">
                        <div class="p-4 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 -960 960 960">
                                <path d="M480-400ZM80-160v-400q0-33 23.5-56.5T160-640h120v-80q0-33 23.5-56.5T360-800h240q33 0 56.5 23.5T680-720v80h120q33 0 56.5 23.5T880-560v400H80Zm240-200v40h-80v-40h-80v120h640v-120h-80v40h-80v-40H320ZM160-560v120h80v-40h80v40h320v-40h80v40h80v-120H160Zm200-80h240v-80H360v80Z" />
                            </svg>
                        </div>
                        <div class="xs:px-5">
                            <h3 class="text-lg mb-3 font-bold text-yellow-400">{{ __('web/home/services.waterHeaterInstallationAndRepair') }}</h3>
                            <p class="text-gray-200">{{ __('web/home/services.waterHeaterInstallationAndRepairDescription') }}</p>
                        </div>
                    </div>
                </section>
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
</x-layouts.web>
