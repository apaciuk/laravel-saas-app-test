<header x-data="{ mobileMenuOpen: false }" class="relative z-30 @if(Request::is('/')){{ 'bg-white' }}@else{{ 'bg-gray-50' }}@endif">
    <div class="px-8 mx-auto xl:px-5 max-w-7xl">
        <div class="flex items-center justify-between h-24 border-b-2 border-gray-100 md:justify-start md:space-x-6">
            <div class="inline-flex">
            <!-- data-replace='{ "translate-y-12": "translate-y-0", "scale-110": "scale-100", "opacity-0": "opacity-100" }' -->
                <a href="{{ route('wave.home') }}" class="flex items-center justify-center space-x-3 transition-all duration-1000 ease-out transform text-wave-500">
                    @if(Voyager::image(theme('logo')))
                        <img class="h-9" src="{{ Voyager::image(theme('logo')) }}" alt="Company name">
                    @else
                        <svg class="w-auto h-14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 415 61" ><g fill="#bf1e5c" color="#bf1e5c" transform="translate(0 4) scale(0.6363637)"><svg width="44.0" height="44.0" x="0.0" y="0.0" viewBox="0 0 44 44"><path fill="currentColor" fill-rule="evenodd" d="M21.973 29.756l14.787 8.535-9.168 5.28-5.605-3.224-5.563 3.225-9.182-5.281 14.73-8.535zm0-15.005L44 27.454v6.492l-3.52 2.07-18.506-10.675L3.525 36.016l-3.52-2.042v-6.52L21.973 14.75zM21.97 0l22.026 12.689v10.576L21.984 10.591 0 23.294V12.703L21.97 0z"></path></svg></g><path fill="#384684" fill-rule="nonzero" d="M6.58 21.67L2.45 21.67L2.45 5.02L0 5.02L0 1.06L9.02 1.06L9.02 5.02L6.58 5.02L6.58 21.67ZM16.61 21.67L11.95 21.67L9.82 4.10L13.42 4.10L14.59 13.54L15.60 4.10L19.27 4.10L20.47 13.54L21.46 4.10L25.42 4.10L23.16 21.67L18.96 21.67L17.71 11.69L16.61 21.67ZM30.98 2.93L26.78 2.93L26.78 0L30.98 0L30.98 2.93ZM30.98 21.67L26.78 21.67L26.78 4.10L30.98 4.10L30.98 21.67ZM36.91 21.67L32.64 21.67L32.64 0.94L36.91 0.94L36.91 21.67ZM42.86 21.67L38.59 21.67L38.59 0.94L42.86 0.94L42.86 21.67ZM51.26 21.67L46.22 21.67L44.02 1.06L48.05 1.06L49.20 14.06L50.35 1.06L54.19 1.06L55.30 14.06L56.40 1.06L60.48 1.06L58.22 21.67L53.28 21.67L52.25 11.74L51.26 21.67ZM64.82 21.86Q62.78 21.86 62.03 20.51Q61.27 19.15 61.27 16.63L61.27 16.63Q61.27 14.57 61.81 13.46Q62.35 12.36 63.31 11.84Q64.27 11.33 66.24 10.70L66.24 10.70L67.39 10.32L67.39 10.27L67.39 8.52Q67.39 7.82 67.12 7.45Q66.84 7.08 66.46 7.08L66.46 7.08Q66.12 7.08 65.87 7.39Q65.62 7.70 65.62 8.23L65.62 8.23L65.62 9.29L61.54 9.29L61.54 8.71Q61.54 6.12 62.75 5.02Q63.96 3.91 66.70 3.91L66.70 3.91Q68.88 3.91 70.25 5.05Q71.62 6.19 71.62 8.28L71.62 8.28L71.62 21.67L67.44 21.67L67.44 19.58Q67.13 20.66 66.44 21.26Q65.76 21.86 64.82 21.86L64.82 21.86ZM66.48 18.60Q66.96 18.60 67.16 18.20Q67.37 17.81 67.37 17.23L67.37 17.23L67.37 12.34Q66.43 12.70 65.99 13.25Q65.54 13.80 65.54 14.78L65.54 14.78L65.54 17.04Q65.54 18.60 66.48 18.60L66.48 18.60ZM76.85 21.86Q75.19 21.86 74.57 21.17Q73.94 20.47 73.94 18.94L73.94 18.94L73.94 7.97L72.77 7.97L72.77 4.78L73.94 4.78L73.94 1.06L78.02 1.06L78.02 4.78L79.22 4.78L79.22 7.97L78.02 7.97L78.02 17.83Q78.02 18.29 78.10 18.50Q78.17 18.72 78.48 18.72L78.48 18.72Q78.72 18.72 78.94 18.70Q79.15 18.67 79.22 18.67L79.22 18.67L79.22 21.55Q78.86 21.65 78.18 21.76Q77.50 21.86 76.85 21.86L76.85 21.86ZM85.82 21.86Q82.94 21.86 81.67 20.40Q80.40 18.94 80.40 15.91L80.40 15.91L80.40 10.49Q80.40 8.21 80.89 6.78Q81.38 5.35 82.55 4.63Q83.71 3.91 85.78 3.91L85.78 3.91Q88.03 3.91 89.45 5.09Q90.86 6.26 90.86 8.38L90.86 8.38L90.86 11.06L86.59 11.06L86.59 8.59Q86.59 7.90 86.40 7.52Q86.21 7.15 85.66 7.15L85.66 7.15Q84.62 7.15 84.62 8.62L84.62 8.62L84.62 17.14Q84.62 17.74 84.88 18.16Q85.13 18.58 85.63 18.58L85.63 18.58Q86.14 18.58 86.39 18.17Q86.64 17.76 86.62 17.11L86.62 17.11L86.59 14.16L90.86 14.16L90.86 17.23Q90.86 19.39 89.46 20.63Q88.06 21.86 85.82 21.86L85.82 21.86ZM92.33 21.67L92.33 0.94L96.65 0.94L96.65 5.83Q97.32 3.91 99.22 3.91L99.22 3.91Q100.99 3.91 101.90 5.04Q102.82 6.17 102.82 8.14L102.82 8.14L102.82 21.67L98.62 21.67L98.62 8.40Q98.62 7.82 98.35 7.46Q98.09 7.10 97.58 7.10L97.58 7.10Q97.15 7.10 96.90 7.48Q96.65 7.85 96.65 8.38L96.65 8.38L96.65 21.67L92.33 21.67Z" transform="translate(36, 7.164)"></path></svg>
                    @endif
 
                </a>
            </div>
            <div class="flex justify-end flex-grow -my-2 -mr-2 md:hidden">
                <button @click="mobileMenuOpen = true" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path></svg>
                </button>
            </div>

            <!-- This is the homepage nav when a user is not logged in -->
            @if(auth()->guest())
                @include('theme::menus.guest')
            @else <!-- Otherwise we want to show the menu for the logged in user -->
                @include('theme::menus.authenticated')
            @endif

        </div>
    </div>

    @if(auth()->guest())
        @include('theme::menus.guest-mobile')
    @else
        @include('theme::menus.authenticated-mobile')
    @endif
</header>
