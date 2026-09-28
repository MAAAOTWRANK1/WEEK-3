<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PageController extends Controller
{
    public function beranda(Request $request): View
    {
        $user = $request->query('user');

        return view('beranda', [
            'user' => $user ? Str::limit($user, 40, '') : null,
            'mode' => 'light',
        ]);
    }

    public function profil(): View
    {
        $mode = 'light';
        $nama = 'Muhammad Adi Anugerah Arrahman';
        $nrp = '5025241118';
        $kelas = 'Kelas PBKK ITS';
        $mataKuliah = [
            'Pemrograman Berbasis Kerangka Kerja',
            'Rekayasa Perangkat Lunak',
            'Kecerdasan Artifisial',
        ];
        $keaktifan = 'Aktif dalam diskusi dan pengembangan proyek kelompok.';

        return view('profil', compact('nama', 'nrp', 'kelas', 'mataKuliah', 'keaktifan', 'mode'));
    }

    public function ideAgent(Request $request): View
    {
        $mode = in_array($request->query('mode'), ['light', 'dark'], true)
            ? $request->query('mode')
            : 'light';
        $komponen = [
            ['nama' => 'Planner Agent', 'deskripsi' => 'Memecah tujuan pengguna menjadi rencana kerja.'],
            ['nama' => 'Tool Executor', 'deskripsi' => 'Menjalankan tool sesuai langkah yang telah direncanakan.'],
            ['nama' => 'Memory', 'deskripsi' => 'Menyimpan konteks penting untuk menjaga kesinambungan proses.'],
            ['nama' => 'Reviewer', 'deskripsi' => 'Memeriksa hasil dan memberi umpan balik sebelum dikirim.'],
        ];

        return view('ide-agent')->with(compact('komponen', 'mode'));
    }

    public function simpanIde(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'nama' => ['required', 'max:100'],
            'judul_ide' => ['required', 'max:150'],
            'deskripsi' => ['required', 'min:20'],
        ]);

        return redirect()->route('ide-agent')->with('status', 'Ide dari '.$validated['nama'].' berhasil dikirim.');
    }
}
