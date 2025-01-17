@props(['type' => 'text'])
<input type="{{ $type }}"
    {{ $attributes->merge(['class' => 'rounded py-2 px-3 text-sm bg-transparent w-full outline-none border border-slate-300 hover:border-teal-500 focus:border-teal-500 disabled:opacity-50 disabled:cursor-not-allowed']) }}>
