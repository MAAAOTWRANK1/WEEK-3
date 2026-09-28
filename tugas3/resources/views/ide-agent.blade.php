@extends('layouts.app')

@section('title', 'Ide-Riset Agentic AI')

@section('content')
    <section class="mx-auto max-w-6xl px-6 py-16">
        <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <div class="max-w-2xl">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-teal-700 dark:text-teal-300">Rancangan platform kelompok</p>
                <h1 class="mt-3 text-4xl font-black tracking-tight">Agentic AI, dari niat ke hasil.</h1>
                <p class="mt-5 leading-7 text-slate-600 dark:text-slate-300">Alur kerja modular yang membantu agen merencanakan, bertindak, mengingat, lalu meninjau hasil.</p>
            </div>
            <a href="{{ route('ide-agent', ['mode' => $mode === 'dark' ? 'light' : 'dark']) }}" class="rounded-full border border-slate-300 px-4 py-2 text-sm font-semibold hover:border-teal-600 dark:border-slate-700">Mode {{ $mode === 'dark' ? 'light' : 'dark' }}</a>
        </div>

        <div class="mt-12 grid gap-4 md:grid-cols-4">
            @foreach ($komponen as $komponenItem)
                <div class="relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <span class="text-xs font-bold text-amber-500">0{{ $loop->iteration }}</span>
                    <h2 class="mt-6 font-bold">{{ $komponenItem['nama'] }}</h2>
                    <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $komponenItem['deskripsi'] }}</p>
                    @if (! $loop->last)<span class="absolute -right-3 top-1/2 hidden text-2xl text-teal-500 md:block">→</span>@endif
                </div>
            @endforeach
        </div>

        <div class="mt-16 grid gap-8 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
                <h2 class="text-2xl font-black">Kirim ide riset</h2>
                <p class="mt-3 text-sm leading-7 text-slate-600 dark:text-slate-300">Tambahkan gagasan yang dapat memperkuat platform kelompok.</p>
            </div>
            <div>
                @session('status')
                    <x-status-banner tipe="success" class="mb-5">{{ $value }}</x-status-banner>
                @endsession
                <form action="{{ route('ide-agent.simpan') }}" method="POST" class="space-y-5 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    @csrf
                    <div><label for="nama" class="mb-2 block text-sm font-semibold">Nama</label><input id="nama" name="nama" value="{{ old('nama') }}" class="w-full rounded-lg border border-slate-300 bg-transparent px-4 py-3 text-sm dark:border-slate-700" required>@error('nama')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror</div>
                    <div><label for="judul_ide" class="mb-2 block text-sm font-semibold">Judul ide</label><input id="judul_ide" name="judul_ide" value="{{ old('judul_ide') }}" class="w-full rounded-lg border border-slate-300 bg-transparent px-4 py-3 text-sm dark:border-slate-700" required>@error('judul_ide')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror</div>
                    <div><label for="deskripsi" class="mb-2 block text-sm font-semibold">Deskripsi</label><textarea id="deskripsi" name="deskripsi" rows="5" class="w-full rounded-lg border border-slate-300 bg-transparent px-4 py-3 text-sm dark:border-slate-700" required>{{ old('deskripsi') }}</textarea>@error('deskripsi')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror</div>
                    <button type="submit" class="rounded-lg bg-teal-700 px-5 py-3 text-sm font-bold text-white hover:bg-teal-800">Kirim ide</button>
                </form>
            </div>
        </div>
    </section>
@endsection