<nav class="border-b border-slate-200/80 bg-white/90 backdrop-blur dark:border-slate-800 dark:bg-slate-950/90">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
        <a href="{{ route('beranda') }}" class="text-lg font-bold tracking-tight text-teal-700 dark:text-teal-300">PBKK<span class="text-amber-500">ITS</span></a>
        <button type="button" class="rounded border border-slate-300 px-3 py-2 text-sm md:hidden" data-menu-button aria-expanded="false">Menu</button>
        <div class="hidden items-center gap-6 text-sm font-semibold md:flex" data-menu>
            <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'text-teal-700 dark:text-teal-300' : 'text-slate-500 hover:text-teal-700 dark:text-slate-300' }}">Beranda</a>
            <a href="{{ route('profil') }}" class="{{ request()->routeIs('profil') ? 'text-teal-700 dark:text-teal-300' : 'text-slate-500 hover:text-teal-700 dark:text-slate-300' }}">Profil</a>
            <a href="{{ route('ide-agent') }}" class="{{ request()->routeIs('ide-agent*') ? 'text-teal-700 dark:text-teal-300' : 'text-slate-500 hover:text-teal-700 dark:text-slate-300' }}">Ide-Riset</a>
        </div>
    </div>
    <div class="hidden border-t border-slate-200 px-6 py-3 md:hidden dark:border-slate-800" data-menu-mobile>
        <div class="flex flex-col gap-3 text-sm font-semibold">
            <a href="{{ route('beranda') }}">Beranda</a>
            <a href="{{ route('profil') }}">Profil</a>
            <a href="{{ route('ide-agent') }}">Ide-Riset</a>
        </div>
    </div>
</nav>