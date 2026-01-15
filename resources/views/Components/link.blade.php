<a {{ $attributes->merge([
    'class' => 'rounded-md bg-orange-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 hover:bg-orange-700'
]) }}>
    {{ $slot }}
</a>



