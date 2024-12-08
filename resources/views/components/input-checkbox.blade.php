<input
    {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded border-gray-500 text-indigo-600 shadow-sm focus:ring-indigo-500']) }}>
    {{ $slot }}
</input>
