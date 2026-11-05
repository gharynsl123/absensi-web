<div class="flex flex-col gap-6">
    <!-- Welcome Header -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 p-6 rounded-2xl bg-gradient-to-r from-emerald-600 to-teal-700 text-white shadow-sm">
        <div>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-white/20 text-white mb-2">
                Panel Guru
            </span>
            <h1 class="text-2xl font-bold">Selamat Datang, {{ auth()->user()->name }}!</h1>
            <p class="text-emerald-100 text-sm mt-1">
                Kelola sesi presensi kelas dan pantau kehadiran siswa Anda hari ini.
            </p>
        </div>
        <div class="flex items-center gap-2">
            <span class="text-xs bg-white/10 px-3 py-1.5 rounded-lg border border-white/20">
                {{ now()->translatedFormat('l, d F Y') }}
            </span>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="p-5 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400 text-sm">
                <span>Jadwal Mengajar</span>
                <span class="text-emerald-500 font-semibold text-xs">Hari Ini</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900 dark:text-zinc-100">3 Kelas</div>
            <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">Total 6 jam pelajaran</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400 text-sm">
                <span>Total Siswa Diajar</span>
                <span class="text-blue-500 font-semibold text-xs">Hari Ini</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900 dark:text-zinc-100">96 Siswa</div>
            <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">Dari 3 kelas berbeda</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400 text-sm">
                <span>Rata-rata Kehadiran</span>
                <span class="text-teal-500 font-semibold text-xs">Aktif</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900 dark:text-zinc-100">97.9%</div>
            <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">94 hadir, 2 berhalangan</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 dark:text-zinc-400 text-sm">
                <span>Pengajuan Izin</span>
                <span class="text-amber-500 font-semibold text-xs">Perlu Verifikasi</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900 dark:text-zinc-100">2 Siswa</div>
            <p class="text-xs text-zinc-500 dark:text-zinc-400 mt-1">Surat sakit / dispensasi</p>
        </div>
    </div>

    <!-- Sesi Mengajar Hari Ini -->
    <div class="p-6 rounded-xl border border-zinc-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 shadow-xs">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-base font-semibold text-zinc-900 dark:text-zinc-100">Sesi Mengajar & Presensi Kelas Hari Ini</h3>
                <p class="text-xs text-zinc-500 dark:text-zinc-400">Pastikan untuk membuka sesi presensi sebelum memulai pembelajaran di kelas.</p>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="text-xs text-zinc-500 dark:text-zinc-400 border-b border-zinc-100 dark:border-zinc-700">
                        <th class="pb-2">Waktu</th>
                        <th class="pb-2">Kelas</th>
                        <th class="pb-2">Mata Pelajaran</th>
                        <th class="pb-2">Ruangan</th>
                        <th class="pb-2">Kehadiran</th>
                        <th class="pb-2 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100 dark:divide-zinc-700/50">
                    <tr>
                        <td class="py-3 text-xs text-zinc-500">07:15 - 08:45</td>
                        <td class="py-3 font-medium text-zinc-900 dark:text-zinc-100">XII RPL 1</td>
                        <td class="py-3 text-zinc-600 dark:text-zinc-400">Pemrograman Web</td>
                        <td class="py-3 text-xs text-zinc-500">Lab Komputer 1</td>
                        <td class="py-3"><span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-emerald-100 dark:bg-emerald-900/50 text-emerald-700 dark:text-emerald-300">32/32 Hadir</span></td>
                        <td class="py-3 text-right">
                            <span class="text-xs font-medium text-zinc-500 bg-zinc-100 dark:bg-zinc-700 px-2.5 py-1 rounded">Selesai</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 text-xs text-zinc-500">09:00 - 10:30</td>
                        <td class="py-3 font-medium text-zinc-900 dark:text-zinc-100">XI RPL 2</td>
                        <td class="py-3 text-zinc-600 dark:text-zinc-400">Pemrograman Berorientasi Objek</td>
                        <td class="py-3 text-xs text-zinc-500">Lab Komputer 2</td>
                        <td class="py-3"><span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-blue-100 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300">Sesi Berlangsung</span></td>
                        <td class="py-3 text-right">
                            <button type="button" class="text-xs font-medium text-white bg-emerald-600 hover:bg-emerald-700 px-3 py-1 rounded cursor-pointer">Buka Presensi</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 text-xs text-zinc-500">10:45 - 12:15</td>
                        <td class="py-3 font-medium text-zinc-900 dark:text-zinc-100">X PPLG 1</td>
                        <td class="py-3 text-zinc-600 dark:text-zinc-400">Dasar-dasar Kejuruan</td>
                        <td class="py-3 text-xs text-zinc-500">R. Teori 2</td>
                        <td class="py-3"><span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-zinc-100 dark:bg-zinc-700 text-zinc-600 dark:text-zinc-400">Belum Dimulai</span></td>
                        <td class="py-3 text-right">
                            <span class="text-xs font-medium text-zinc-400">Menunggu</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

