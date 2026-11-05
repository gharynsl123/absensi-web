<div class="flex flex-col gap-6">
    <!-- Welcome Header -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 p-6 rounded-2xl bg-gradient-to-r from-amber-600 to-orange-700 text-white shadow-sm">
        <div>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-white/20 text-white mb-2">
                Panel Ketua Program Studi (Kaprodi)
            </span>
            <h1 class="text-2xl font-bold">Selamat Datang, {{ auth()->user()->name }}!</h1>
            <p class="text-amber-100 text-sm mt-1">
                Monitoring presensi dan kedisiplinan siswa serta guru di lingkungan program keahlian.
            </p>
        </div>
        <div class="flex items-center gap-2">
            <span class="text-xs bg-white/10 px-3 py-1.5 rounded-lg border border-white/20">
                {{ now()->translatedFormat('l, d F Y') }}
            </span>
        </div>
    </div>

    <!-- Jurusan Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="p-5 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400 text-sm">
                <span>Kehadiran Siswa Jurusan</span>
                <span class="text-emerald-500 font-semibold text-xs">Hari Ini</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900 dark:text-zinc-100">97.4%</div>
            <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">192 dari 197 siswa hadir</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400 text-sm">
                <span>Kehadiran Guru Jurusan</span>
                <span class="text-amber-500 font-semibold text-xs">Aktif</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900 dark:text-zinc-100">100%</div>
            <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">12 dari 12 guru mengajar</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400 text-sm">
                <span>Total Rombel / Kelas</span>
                <span class="text-blue-500 font-semibold text-xs">Jurusan</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900 dark:text-zinc-100">6 Kelas</div>
            <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">Tingkat X, XI, dan XII</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400 text-sm">
                <span>Dispensasi & PKL</span>
                <span class="text-orange-500 font-semibold text-xs">Prakerin</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900 dark:text-zinc-100">3 Siswa</div>
            <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">Praktik kerja industri</p>
        </div>
    </div>

    <!-- Rekap Kehadiran Per Kelas -->
    <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-xs">
        <h3 class="text-base font-semibold text-zinc-900 dark:text-zinc-100 mb-4">Monitoring Presensi Kelas Jurusan Hari Ini</h3>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="text-xs text-zinc-500 dark:text-zinc-400 border-b border-zinc-100 dark:border-zinc-700">
                        <th class="pb-2">Kelas</th>
                        <th class="pb-2">Wali Kelas</th>
                        <th class="pb-2">Jumlah Siswa</th>
                        <th class="pb-2">Hadir</th>
                        <th class="pb-2">Izin/Sakit</th>
                        <th class="pb-2">Alpa</th>
                        <th class="pb-2 text-right">Persentase</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100 dark:divide-zinc-700/50">
                    <tr>
                        <td class="py-2.5 font-medium text-zinc-900 dark:text-zinc-100">X PPLG 1</td>
                        <td class="py-2.5 text-zinc-600 dark:text-zinc-400">H. Abu</td>
                        <td class="py-2.5 text-zinc-500 text-xs">34 Siswa</td>
                        <td class="py-2.5 text-emerald-600 font-medium">34</td>
                        <td class="py-2.5 text-zinc-500">0</td>
                        <td class="py-2.5 text-zinc-500">0</td>
                        <td class="py-2.5 text-right"><span class="px-2 py-0.5 rounded text-xs bg-emerald-100 dark:bg-emerald-900/50 text-emerald-700 dark:text-emerald-300">100%</span></td>
                    </tr>
                    <tr>
                        <td class="py-2.5 font-medium text-zinc-900 dark:text-zinc-100">XI RPL 1</td>
                        <td class="py-2.5 text-zinc-600 dark:text-zinc-400">H. Maimunah</td>
                        <td class="py-2.5 text-zinc-500 text-xs">33 Siswa</td>
                        <td class="py-2.5 text-emerald-600 font-medium">32</td>
                        <td class="py-2.5 text-amber-600">1</td>
                        <td class="py-2.5 text-zinc-500">0</td>
                        <td class="py-2.5 text-right"><span class="px-2 py-0.5 rounded text-xs bg-emerald-100 dark:bg-emerald-900/50 text-emerald-700 dark:text-emerald-300">97.0%</span></td>
                    </tr>
                    <tr>
                        <td class="py-2.5 font-medium text-zinc-900 dark:text-zinc-100">XII RPL 1</td>
                        <td class="py-2.5 text-zinc-600 dark:text-zinc-400">Drs. Ahmad</td>
                        <td class="py-2.5 text-zinc-500 text-xs">32 Siswa</td>
                        <td class="py-2.5 text-emerald-600 font-medium">31</td>
                        <td class="py-2.5 text-zinc-500">0</td>
                        <td class="py-2.5 text-rose-600">1</td>
                        <td class="py-2.5 text-right"><span class="px-2 py-0.5 rounded text-xs bg-amber-100 dark:bg-amber-900/50 text-amber-700 dark:text-amber-300">96.8%</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

