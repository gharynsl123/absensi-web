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
        <div class="p-5 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Jadwal Mengajar</span>
                <span class="text-emerald-600 font-semibold text-xs">Hari Ini</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">3 Kelas</div>
            <p class="text-xs text-zinc-500 mt-1">Total 6 jam pelajaran</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Total Siswa Diajar</span>
                <span class="text-blue-600 font-semibold text-xs">Hari Ini</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">96 Siswa</div>
            <p class="text-xs text-zinc-500 mt-1">Dari 3 kelas berbeda</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Rata-rata Kehadiran</span>
                <span class="text-teal-600 font-semibold text-xs">Aktif</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">97.9%</div>
            <p class="text-xs text-zinc-500 mt-1">94 hadir, 2 berhalangan</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Pengajuan Izin</span>
                <span class="text-amber-600 font-semibold text-xs">Perlu Verifikasi</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">2 Siswa</div>
            <p class="text-xs text-zinc-500 mt-1">Surat sakit / dispensasi</p>
        </div>
    </div>

    <!-- Sesi Mengajar Hari Ini -->
    <div class="p-6 rounded-xl border border-zinc-200 bg-white shadow-xs">
        <div class="flex items-center justify-between mb-4">
            <div>
                <h3 class="text-base font-semibold text-zinc-900">Sesi Mengajar & Presensi Kelas Hari Ini</h3>
                <p class="text-xs text-zinc-500">Pastikan untuk membuka sesi presensi sebelum memulai pembelajaran di kelas.</p>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead>
                    <tr class="text-xs text-zinc-500 border-b border-zinc-200">
                        <th class="pb-2 font-medium">Waktu</th>
                        <th class="pb-2 font-medium">Kelas</th>
                        <th class="pb-2 font-medium">Mata Pelajaran</th>
                        <th class="pb-2 font-medium">Ruangan</th>
                        <th class="pb-2 font-medium">Kehadiran</th>
                        <th class="pb-2 text-right font-medium">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-100">
                    <tr>
                        <td class="py-3 text-xs text-zinc-500">07:15 - 08:45</td>
                        <td class="py-3 font-medium text-zinc-900">XII RPL 1</td>
                        <td class="py-3 text-zinc-600">Pemrograman Web</td>
                        <td class="py-3 text-xs text-zinc-500">Lab Komputer 1</td>
                        <td class="py-3"><span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-emerald-50 text-emerald-700 border border-emerald-200 font-medium">32/32 Hadir</span></td>
                        <td class="py-3 text-right">
                            <span class="text-xs font-medium text-zinc-500 bg-zinc-100 border border-zinc-200 px-2.5 py-1 rounded">Selesai</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 text-xs text-zinc-500">09:00 - 10:30</td>
                        <td class="py-3 font-medium text-zinc-900">XI RPL 2</td>
                        <td class="py-3 text-zinc-600">Pemrograman Berorientasi Objek</td>
                        <td class="py-3 text-xs text-zinc-500">Lab Komputer 2</td>
                        <td class="py-3"><span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-blue-50 text-blue-700 border border-blue-200 font-medium">Sesi Berlangsung</span></td>
                        <td class="py-3 text-right">
                            <button type="button" class="text-xs font-medium text-white bg-emerald-600 hover:bg-emerald-700 px-3 py-1 rounded cursor-pointer transition">Buka Presensi</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 text-xs text-zinc-500">10:45 - 12:15</td>
                        <td class="py-3 font-medium text-zinc-900">X PPLG 1</td>
                        <td class="py-3 text-zinc-600">Dasar-dasar Kejuruan</td>
                        <td class="py-3 text-xs text-zinc-500">R. Teori 2</td>
                        <td class="py-3"><span class="inline-flex items-center px-2 py-0.5 rounded text-xs bg-zinc-100 text-zinc-600 border border-zinc-200">Belum Dimulai</span></td>
                        <td class="py-3 text-right">
                            <span class="text-xs font-medium text-zinc-400">Menunggu</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
