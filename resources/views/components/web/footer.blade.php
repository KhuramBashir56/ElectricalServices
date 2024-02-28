<footer class="bg-blue-900">
    <section class="2xl:container m-auto px-3 py-16">
        <section class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6 mb-8">
            <div class="p-3">
                <img src="{{ asset('org-logo.png') }}" alt="{{ config('app.name') }}" class="w-20">
                <p class="my-5 text-white">{{ __('web/footer.description') }}</p>
                <div class="flex gap-5 sm:justify-center">
                    <a href="#" class="text-yellow-400 hover:text-white">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-yellow-400 hover:text-white">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                            <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-yellow-400 hover:text-white">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-yellow-400 hover:text-white">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-yellow-400 hover:text-white">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 p-3 gap-8">
                <div>
                    <h3 class="text-2xl text-yellow-400 mb-3">{{ __('web/footer.quickLinks') }}</h3>
                    <ul>
                        <li>
                            <a href="#" class="border-b-2 block p-2 hover:bg-yellow-400 text-white">{{ __('web/menu-bar.home') }}</a>
                        </li>
                        <li>
                            <a href="#" class="border-b-2 block p-2 hover:bg-yellow-400 text-white">{{ __('web/menu-bar.aboutUs') }}</a>
                        </li>
                        <li>
                            <a href="#" class="border-b-2 block p-2 hover:bg-yellow-400 text-white">{{ __('web/menu-bar.gallery') }}</a>
                        </li>
                        <li>
                            <a href="#" class="border-b-2 block p-2 hover:bg-yellow-400 text-white">{{ __('web/menu-bar.contactUs') }}</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-2xl text-yellow-400 mb-3">{{ __('web/footer.usefulLinks') }}</h3>
                    <ul>
                        <li>
                            <a href="#" class="border-b-2 block p-2 hover:bg-yellow-400 text-white">{{ __('web/menu-bar.contactUs') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full p-3">
                <h3 class="text-2xl text-yellow-400">{{ __('web/footer.newsTitle') }}</h3>
                <p class="text-gray-200 my-3">{{ __('web/footer.newsDescription') }}</p>
                <form action="" class="w-full">
                    @csrf
                    <div class="flex w-full bg-white text-lg" dir="ltr">
                        <input type="email" name="" id="" placeholder="{{ __('web/footer.placeholder') }}" class="w-full outline-none border-none p-3">
                        <button class="bg-yellow-400 hover:bg-yellow-500 hover:text-white text-blue-800 px-5">{{ __('web/footer.subscribeButton') }}</button>
                    </div>
                </form>
                <h3 class="text-2xl my-3 text-yellow-400">{{ __('web/menu-bar.languages') }}</h3>
                <ul class="w-full flex gap-4">
                    <li class="w-full text-white">
                        <a href="{{ route(Route::currentRouteName(), ['locale' => 'ar']) }}" class="flex gap-x-3 w-full px-3 py-2 hover:bg-yellow-400 {{request()->is(Route::currentRouteName(), ['locale' => 'ar']) ? 'bg-yellow-400': ''}}"><img src="{{ asset('flags/sa.svg') }}" class="w-6" alt="">{{ __('العربية') }}</a>
                    </li>
                    <li class="w-full text-white">
                        <a href="{{ route(Route::currentRouteName(), ['locale' => 'en']) }}" class="flex gap-x-3 px-3 py-2 hover:bg-yellow-400 {{request()->is(Route::currentRouteName(), ['locale' => 'en']) ? 'bg-yellow-400': ''}}"><img src="{{ asset('flags/us.svg') }}" class="w-6" alt="">{{ __('English US') }}</a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6 max-w-5xl mx-auto p-3">
            <div class="flex flex-col xs:flex-row gap-y-3 items-center bg-blue-700 p-5 w-full ">
                <div class="p-3 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                    <svg width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                </div>
                <div class="px-3 text-center ltr:xs:text-left rtl:xs:text-right">
                    <address class="text-lg font-bold text-white not-italic">{{ __('web/header.address') }}</address>
                    <address class="text-gray-200 not-italic">{{ __('web/header.country') }}</address>
                </div>
            </div>
            <div class="flex flex-col xs:flex-row gap-y-3 items-center bg-yellow-400 p-5 w-full md:col-start-1 md:row-start-1 lg:col-start-2  col-start-1 row-start-2">
                <div class="p-3 bg-blue-900 text-yellow-400 rounded-full flex justify-center items-center">
                    <svg width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                </div>
                <div class="px-3 text-center ltr:xs:text-left rtl:xs:text-right">
                    <address dir="ltr" class="text-lg font-bold text-white not-italic">{{ __('web/header.contact_number') }}</address>
                    <address class="text-gray-200 not-italic">{{ __('web/header.contact') }}</address>
                </div>
            </div>
            <div class="flex flex-col xs:flex-row gap-y-3 items-center bg-blue-700 p-5 w-full">
                <div class="p-3 bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                    <svg width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                </div>
                <div class="px-3 text-center ltr:xs:text-left rtl:xs:text-right">
                    <address class="text-lg font-bold text-white not-italic">{{ __('web/header.email_address') }}</address>
                    <address class="text-gray-200 not-italic">{{ __('web/header.email') }}</address>
                </div>
            </div>
        </section>
    </section>
    <hr class="border-gray-400">
    <section class="2xl:container m-auto px-3 py-6 flex md:justify-between md:flex-row flex-col items-center gap-4 text-gray-200" dir="ltr">
        <span>
            {{ __('web/footer.orgName') }}
        </span>
        <span>
            {{ __('web/footer.copyright') }}
        </span>
    </section>
</footer>
