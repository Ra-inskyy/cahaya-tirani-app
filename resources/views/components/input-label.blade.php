@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-black font-poppins font-medium']) }}>
    {{ $value ?? $slot }}
</label>
