# Laporan Tugas 4 PBKK ITS

## Membangun Aplikasi Multi-View Profil Akademik

Mini-website ini dibuat dengan Laravel, Blade, Tailwind CSS, dan Vite. Aplikasi menampilkan profil akademik, rancangan platform Agentic AI kelompok, serta formulir pengumpulan ide tanpa database.

## Fitur

- Beranda dengan ringkasan situs dan alert selamat datang melalui `/?user=Andi`.
- Profil mahasiswa dengan data akademik dari `PageController`.
- Visualisasi alur Planner Agent, Tool Executor, Memory, dan Reviewer.
- Form ide-riset dengan CSRF, validasi, pesan error, `old()`, dan flash message.
- Dark mode melalui `/ide-agent?mode=dark`.
- Navigasi responsif tanpa CDN; aset diproses melalui Vite.

## Struktur File Utama

### Controller dan Route

- `app/Http/Controllers/PageController.php`: Mengatur semua halaman dan proses submit ide. Data dikirim ke view dengan `compact()` dan `with()`, sedangkan validasi memakai `$request->validate()`.
- `routes/web.php`: Semua route diarahkan ke `PageController` dan diberi nama `beranda`, `profil`, `ide-agent`, serta `ide-agent.simpan`; tidak ada closure route.

### Layout dan Komponen Blade

- `resources/views/layouts/app.blade.php`: Master layout berisi `@yield('title')`, `@yield('content')`, `@vite`, navbar, footer, dan class dark mode.
- `resources/views/partials/navbar.blade.php`: Navigasi responsif dengan `routeIs()` untuk penanda link aktif.
- `resources/views/partials/footer.blade.php`: Footer ITS dengan tahun dinamis melalui `{{ date('Y') }}`.
- `resources/views/components/info-card.blade.php`: Komponen kartu dengan `@props`, `$slot`, named slot `$header`, dan `$attributes->merge()`.
- `resources/views/components/status-banner.blade.php`: Komponen pesan status dengan `@props`, pemetaan tipe warna di `@php`, dan `$slot`.

### Halaman

- `resources/views/beranda.blade.php`: View beranda yang memakai `@extends`, `@section`, `@isset`, dan komponen kartu/status.
- `resources/views/profil.blade.php`: View profil yang menampilkan data controller dengan `<x-info-card>`, `@forelse`, `$loop->iteration`, `$loop->first`, dan `$loop->last`.
- `resources/views/ide-agent.blade.php`: View visualisasi dan form yang memakai `@foreach`, `$loop`, `@csrf`, `@error`, `old()`, dan `@session`.
- `resources/css/app.css`: Mengaktifkan Tailwind v4 melalui `@import 'tailwindcss'` dan custom dark variant.
- `resources/js/app.js`: Mengatur buka/tutup menu navigasi pada layar mobile.

## Bagian yang Harus Diisi Manual

Edit data berikut di `PageController.php`:

- `$nama = '[ISI NAMA]'`
- `$nrp = '[ISI NRP]'`
- `$kelas`
- Daftar `$mataKuliah`
- Keterangan `$keaktifan`

## Verifikasi

```text
php artisan route:list       PASS: 4 route bernama ke PageController
php artisan view:cache       PASS
php artisan view:clear       PASS
php artisan test --compact   PASS: 2 tests, 2 assertions
npm run build                PASS: Vite menghasilkan public/build/manifest.json
```

Catatan: build Vite berhasil pada Node `20.17.0`, tetapi Vite memberi peringatan bahwa versi minimum resminya adalah Node `20.19+` atau `22.12+`.
