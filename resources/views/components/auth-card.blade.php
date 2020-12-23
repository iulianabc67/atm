<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-welcome-colour">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full m-1 md:m-0 sm:max-w-md mt-6 md:mt-6 px-6 py-4 bg-white shadow-2xl overflow-hidden md:rounded-lg">
        {{ $slot }}
    </div>
</div>
