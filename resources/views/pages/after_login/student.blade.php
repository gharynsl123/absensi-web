<div class="flex flex-col gap-6">
    <!-- Welcome Header -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 p-6 rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-700 text-white shadow-sm">
        <div>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-white/20 text-white mb-2">
                Panel Siswa
            </span>
            <h1 class="text-2xl font-bold">Selamat Datang, {{ auth()->user()->name }}!</h1>
            <p class="text-blue-100 text-sm mt-1">
                Pantau kehadiran dan jadwal pelajaran Anda di SMK Muhammadiyah 2 Kuningan.
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
        <div class="p-3 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Persentase Kehadiran</span>
                <span class="text-emerald-600 font-semibold text-xs">Bulan Ini</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">96.5%</div>
            <p class="text-xs text-zinc-500 mt-1">Kategori: Sangat Baik</p>
        </div>

        <div class="p-3 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Hadir</span>
                <span class="text-blue-600 font-semibold text-xs">Hari</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">22</div>
            <p class="text-xs text-zinc-500 mt-1">Total kehadiran tepat waktu</p>
        </div>

        <div class="p-3 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Izin / Sakit</span>
                <span class="text-amber-600 font-semibold text-xs">Surat</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">1</div>
            <p class="text-xs text-zinc-500 mt-1">Izin disetujui</p>
        </div>

        <div class="p-3 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Alpa / Terlambat</span>
                <span class="text-rose-600 font-semibold text-xs">Poin</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">0</div>
            <p class="text-xs text-zinc-500 mt-1">Tidak ada catatan pelanggaran</p>
        </div>
    </div>

    <!-- Status Presensi & Info -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Status Hari Ini -->
        <div class="p-6 rounded-xl border border-zinc-200 bg-white shadow-xs flex flex-col justify-between">
            <div>
                <h3 class="text-base font-semibold text-zinc-900 mb-2">Presensi Hari Ini</h3>
                <p class="text-xs text-zinc-500 mb-4">Jam masuk operasional sekolah 06:30 - 07:15 WIB</p>
                <div class="flex items-center gap-3 p-3 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-800">
                    <div class="size-2.5 rounded-full bg-emerald-500"></div>
                    <div class="text-sm">
                        <span class="font-medium">Sudah Absen Masuk</span>
                        <div class="text-xs text-emerald-700">Tercatat: 06:52 WIB (Tepat Waktu)</div>
                    </div>
                </div>
            </div>
            <div class="mt-6 pt-4 border-t border-zinc-100 flex items-center justify-between text-xs text-zinc-500">
                <span>Jam Pulang: 15:30 WIB</span>
                <span class="font-medium text-zinc-700">Status Aktif</span>
            </div>
        </div>

        <!-- Jadwal Pelajaran Hari Ini -->
        <div class="lg:col-span-2 p-6 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <h3 class="text-base font-semibold text-zinc-900 mb-4">Jadwal Pelajaran Hari Ini</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead>
                        <tr class="text-xs text-zinc-500 border-b border-zinc-200">
                            <th class="pb-2 font-medium">Waktu</th>
                            <th class="pb-2 font-medium">Mata Pelajaran</th>
                            <th class="pb-2 font-medium">Guru</th>
                            <th class="pb-2 text-right font-medium">Ruangan</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-100">
                        <tr>
                            <td class="py-2.5 text-xs text-zinc-500">07:15 - 08:45</td>
                            <td class="py-2.5 font-medium text-zinc-900">Pemrograman Web</td>
                            <td class="py-2.5 text-zinc-600">H. Abu</td>
                            <td class="py-2.5 text-right"><span class="px-2 py-0.5 rounded text-xs bg-zinc-100 text-zinc-700 border border-zinc-200">Lab Komputer 1</span></td>
                        </tr>
                        <tr>
                            <td class="py-2.5 text-xs text-zinc-500">09:00 - 10:30</td>
                            <td class="py-2.5 font-medium text-zinc-900">Basis Data</td>
                            <td class="py-2.5 text-zinc-600">H. Maimunah</td>
                            <td class="py-2.5 text-right"><span class="px-2 py-0.5 rounded text-xs bg-zinc-100 text-zinc-700 border border-zinc-200">Lab Komputer 2</span></td>
                        </tr>
                        <tr>
                            <td class="py-2.5 text-xs text-zinc-500">10:45 - 12:15</td>
                            <td class="py-2.5 font-medium text-zinc-900">Matematika Terapan</td>
                            <td class="py-2.5 text-zinc-600">Drs. Ahmad</td>
                            <td class="py-2.5 text-right"><span class="px-2 py-0.5 rounded text-xs bg-zinc-100 text-zinc-700 border border-zinc-200">R. Teori 3</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
