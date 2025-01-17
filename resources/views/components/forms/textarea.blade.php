<textarea
    {{ $attributes->merge(['class' => 'w-full bg-transparent rounded px-3 py-2 text-sm outline-none border border-slate-300 hover:border-teal-500 focus:border-teal-500 disabled:opacity-50 disabled:cursor-not-allowed']) }}
    rows="5">
{{ $slot }}</textarea>
