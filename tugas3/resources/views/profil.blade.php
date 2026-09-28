@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <section class="mx-auto max-w-6xl px-6 py-16">
        <div class="mb-12 max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.2em] text-teal-700 dark:text-teal-300">Tentang saya</p>
            <h1 class="mt-3 text-4xl font-black tracking-tight">Profil Mahasiswa</h1>
        </div>
        <div class="grid gap-6 lg:grid-cols-2">
            <x-info-card judul="Identitas" tipe="Akademik">
                <dl class="space-y-4 text-sm">
                    <div class="flex justify-between gap-4 border-b border-slate-100 pb-3 dark:border-slate-800"><dt class="text-slate-500">Nama</dt><dd class="font-semibold">{{ $nama }}</dd></div>
                    <div class="flex justify-between gap-4 border-b border-slate-100 pb-3 dark:border-slate-800"><dt class="text-slate-500">NRP</dt><dd class="font-semibold">{{ $nrp }}</dd></div>
                    <div class="flex justify-between gap-4"><dt class="text-slate-500">Kelas</dt><dd class="font-semibold">{{ $kelas }}</dd></div>
                </dl>
            </x-info-card>
            <x-info-card judul="Keaktifan" tipe="Aktif" class="border-amber-200 bg-amber-50 dark:border-amber-900 dark:bg-amber-950">
                <p class="text-sm leading-7">{{ $keaktifan }}</p>
            </x-info-card>
        </div>
        <x-info-card judul="Mata Kuliah" tipe="Semester" class="mt-6">
            <ul class="divide-y divide-slate-100 dark:divide-slate-800">
                @forelse ($mataKuliah as $mataKuliahItem)
                    <li class="py-4 text-sm {{ $loop->first ? 'font-bold text-teal-700 dark:text-teal-300' : '' }} {{ $loop->last ? 'pb-1 text-amber-700 dark:text-amber-300' : '' }}"><span class="mr-3 text-xs text-slate-400">{{ $loop->iteration }}.</span>{{ $mataKuliahItem }}</li>
                @empty
                    <li class="py-4 text-sm text-slate-500">Belum ada data mata kuliah.</li>
                @endforelse
            </ul>
        </x-info-card>
    </section>
@endsection