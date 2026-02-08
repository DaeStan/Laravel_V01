<button {{ $attributes->merge(['class'=>'rounded-md bg-[#334e66] px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#334e66]', 'type' => 'submit']) }}>
    {{ $slot }}
</button>