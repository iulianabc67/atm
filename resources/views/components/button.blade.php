<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white bg-welcome-colour border border-solid border-welcome-contrast hover:bg-welcome-contrast hover:text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 shadow-lg']) }}>
    {{ $slot }}
</button>
