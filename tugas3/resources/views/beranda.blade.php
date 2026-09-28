@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="relative overflow-hidden border-b border-teal-950 bg-teal-950 text-white">
        <div class="mx-auto max-w-6xl px-6 py-20 lg:py-28">
            <p class="mb-5 text-sm font-semibold uppercase tracking-[0.25em] text-amber-300">Tugas 4 PBKK ITS</p>
            <h1 class="max-w-3xl text-4xl font-black tracking-tight sm:text-6xl">Profil akademik yang merangkai ide menjadi aksi.</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-teal-100">Ruang singkat untuk mengenal perjalanan studi, aktivitas, dan rancangan platform Agentic AI kelompok.</p>
            @isset($user)
                <x-status-banner tipe="success" class="mt-8 max-w-xl">Selamat datang, {{ $user }}!</x-status-banner>
            @endisset
        </div>
    </section>

    <section class="mx-auto grid max-w-6xl gap-6 px-6 py-16 md:grid-cols-3">
        <x-info-card judul="Profil Mahasiswa" tipe="Data">
            <x-slot:header><h2 class="text-lg font-bold">Profil Mahasiswa</h2></x-slot:header>
            <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">Kenali identitas, mata kuliah, dan keaktifan akademik saya.</p>
            <a href="{{ route('profil') }}" class="mt-5 inline-block font-semibold text-teal-700 hover:underline dark:text-teal-300">Lihat profil →</a>
        </x-info-card>
        <x-info-card judul="Ide-Riset" tipe="Eksplorasi">
            <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">Lihat alur komponen Agentic AI dan kirim gagasan risetmu.</p>
            <a href="{{ route('ide-agent') }}" class="mt-5 inline-block font-semibold text-teal-700 hover:underline dark:text-teal-300">Buka ruang ide →</a>
        </x-info-card>
        <x-info-card judul="Mode Tampilan" tipe="Challenge">
            <p class="text-sm leading-7 text-slate-600 dark:text-slate-300">Eksplorasi halaman ide dengan suasana tampilan gelap.</p>
            <a href="{{ route('ide-agent', ['mode' => 'dark']) }}" class="mt-5 inline-block font-semibold text-teal-700 hover:underline dark:text-teal-300">Aktifkan dark mode →</a>
        </x-info-card>
    </section>
@endsection