@props(['judul', 'tipe' => 'default'])

<article {{ $attributes->merge(['class' => 'rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900']) }}>
    <div class="mb-4 flex items-center justify-between gap-4">
        @isset($header)
            {{ $header }}
        @else
            <h2 class="text-lg font-bold">{{ $judul }}</h2>
        @endisset
        <span class="rounded-full bg-teal-50 px-3 py-1 text-xs font-semibold uppercase tracking-wider text-teal-700 dark:bg-teal-950 dark:text-teal-300">{{ $tipe }}</span>
    </div>
    {{ $slot }}
</article>