@props(['tipe' => 'info'])
@php
    $warna = [
        'success' => 'border-emerald-200 bg-emerald-50 text-emerald-800 dark:border-emerald-900 dark:bg-emerald-950 dark:text-emerald-200',
        'error' => 'border-red-200 bg-red-50 text-red-800 dark:border-red-900 dark:bg-red-950 dark:text-red-200',
        'warning' => 'border-amber-200 bg-amber-50 text-amber-800 dark:border-amber-900 dark:bg-amber-950 dark:text-amber-200',
        'info' => 'border-sky-200 bg-sky-50 text-sky-800 dark:border-sky-900 dark:bg-sky-950 dark:text-sky-200',
    ][$tipe] ?? 'border-sky-200 bg-sky-50 text-sky-800';
@endphp

<div {{ $attributes->merge(['class' => "rounded-xl border px-4 py-3 text-sm $warna"]) }} role="status">{{ $slot }}</div>