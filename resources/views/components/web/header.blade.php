<header class="2xl:container mx-auto py-5 px-3 flex justify-center xs:justify-between">
    <a href="{{ route('home', ['locale' => app()->getLocale()]) }}">
        <img src="{{ asset('org-logo.png') }}" width="80" alt="{{ config('app.name ') }}">
    </a>
    <div class="xs:flex gap-x-5 hidden">
        <div class="lg:flex items-center hidden">
            <div class="w-14 aspect-square bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                <span class="material-symbols-outlined text-4xl">location_on</span>
            </div>
            <div class="px-3">
                <address class="text-lg font-bold text-blue-900 not-italic">{{ __('web/header.country') }}</address>
                <address class="text-gray-500 not-italic">{{ __('web/header.address') }}</address>
            </div>
        </div>
        <div class="flex items-center">
            <div class="w-14 aspect-square bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                <span class="material-symbols-outlined text-4xl">phone_iphone</span>
            </div>
            <div class="px-3">
                <address class="text-lg font-bold text-blue-900 not-italic">{{ __('web/header.contact') }}</address>
                <address class="text-gray-500 not-italic" dir="ltr">{{ __('web/header.contact_number') }}</address>
            </div>
        </div>
        <div class="md:flex items-center hidden">
            <div class="w-14 aspect-square bg-yellow-400 text-blue-900 rounded-full flex justify-center items-center">
                <span class="material-symbols-outlined text-4xl">email</span>
            </div>
            <div class="px-3">
                <address class="text-lg font-bold text-blue-900 not-italic">{{ __('web/header.email') }}</address>
                <address class="text-gray-500 not-italic">{{ __('web/header.email_address') }}</address>
            </div>
        </div>
    </div>
</header>
