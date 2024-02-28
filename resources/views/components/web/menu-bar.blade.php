<section class="w-full bg-blue-900 text-white">
    <menu class="2xl:container mx-auto px-3 flex justify-between items-center relative">
        <button id="menuToggle" class="md:hidden border-yellow-500 border-2 rounded-md" title="{{ __('web/menu-bar.menuToggle') }}" type="button">
            <svg fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </button>
        <ul id="mainMenu" class="md:flex flex-row hidden md:static absolute top-full md:w-auto xs:w-64 w-56 md:bg-transparent bg-blue-800">
            <li>
                <a href="{{ route('welcome', ['locale' => app()->getLocale()]) }}" class="block px-5 py-3 hover:bg-yellow-500 {{ request()->is(app()->getLocale()) ? 'bg-yellow-500' : '' }}">{{ __('web/menu-bar.home') }}</a>
            </li>
            <li>
                <a href="#" class="block px-5 py-3 hover:bg-yellow-500">{{ __('web/menu-bar.gallery') }}</a>
            </li>
            <li>
                <a href="{{ route('about_us', ['locale' => app()->getLocale()]) }}" class="block px-5 py-3 hover:bg-yellow-500 {{ request()->is(app()->getLocale() . '/about-us') ? 'bg-yellow-500' : '' }}">{{ __('web/menu-bar.aboutUs') }}</a>
            </li>
            <li>
                <a href="#" class="block px-5 py-3 hover:bg-yellow-500">{{ __('web/menu-bar.contactUs') }}</a>
            </li>
        </ul>
        <div class="relative">
            <button type="button" id="languagesToggle" class="block px-5 py-3" title="{{ __('web/menu-bar.languages') }}">
                <svg fill="currentColor" class="w-6 h-6" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484-.08.08-.162.158-.242.234-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" />
                </svg>
            </button>
            <ul id="languageMenu" class="absolute hidden ltr:right-1 rtl:left-0  w-48 z-50 bg-blue-800 top-full">
                <li>
                    <a href="{{ route(Route::currentRouteName(), ['locale' => 'ar']) }}" class="flex gap-x-3 px-5 py-3 hover:bg-yellow-500"><img src="{{ asset('flags/sa.svg') }}" class="w-6" alt="">{{ __('العربية') }}</a>
                </li>
                <li>
                    <a href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}" class="flex gap-x-3 px-5 py-3 hover:bg-yellow-500"><img src="{{ asset('flags/us.svg') }}" class="w-6" alt="">{{ __('English US') }}</a>
                </li>
            </ul>
        </div>
    </menu>
</section>
