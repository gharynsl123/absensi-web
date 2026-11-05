<div class="flex flex-col gap-6">
    <!-- Welcome Header -->
    <div
        class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 p-6 rounded-2xl bg-gradient-to-r from-purple-700 to-indigo-800 text-white shadow-sm">
        <div>
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold bg-white/20 text-black mb-2">
                Panel Super Administrator
            </span>
            <h1 class="text-2xl text-black font-bold">Selamat Datang, {{ auth()->user()->name }}!</h1>
            <p class="text-black text-sm mt-1">
                Pusat kontrol sistem absensi digital SMK Muhammadiyah 2 Kuningan.
            </p>
        </div>
        <div class="flex items-center gap-2">
            <span class="text-xs bg-white/10 px-3 py-1.5 rounded-lg border border-white/20">
                Sistem Aktif & Optimal
            </span>
        </div>
    </div>

    <!-- System Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="p-5 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Total Pengguna</span>
                <span class="text-purple-600 font-semibold text-xs">Akun Aktif</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">524</div>
            <p class="text-xs text-zinc-500 mt-1">Siswa, guru, dan staf</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Total Guru</span>
                <span class="text-emerald-600 font-semibold text-xs">Pengajar</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">48</div>
            <p class="text-xs text-zinc-500 mt-1">Semua jurusan terdaftar</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Total Siswa</span>
                <span class="text-blue-600 font-semibold text-xs">Peserta Didik</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">472</div>
            <p class="text-xs text-zinc-500 mt-1">Kelas X, XI, dan XII</p>
        </div>

        <div class="p-5 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <div class="flex items-center justify-between text-zinc-500 text-sm">
                <span>Tingkat Presensi Hari Ini</span>
                <span class="text-indigo-600 font-semibold text-xs">Sekolah</span>
            </div>
            <div class="text-2xl font-bold mt-2 text-zinc-900">97.8%</div>
            <p class="text-xs text-zinc-500 mt-1">Berdasarkan pencatatan masuk</p>
        </div>
    </div>

    <!-- Admin Shortcuts & Activity Log -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Manajemen Cepat -->
        <div class="p-6 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <h3 class="text-base font-semibold text-zinc-900 mb-4">Navigasi Manajemen</h3>
            <div class="flex flex-col gap-2.5 text-sm">
                <div class="p-3 rounded-lg border border-zinc-200 bg-zinc-50 flex items-center justify-between">
                    <div>
                        <div class="font-medium text-zinc-900">Manajemen Pengguna & Role</div>
                        <div class="text-xs text-zinc-500">Kelola akun siswa, guru, kaprodi</div>
                    </div>
                    <span class="text-xs font-semibold text-purple-600">Kelola</span>
                </div>
                <div class="p-3 rounded-lg border border-zinc-200 bg-zinc-50 flex items-center justify-between">
                    <div>
                        <div class="font-medium text-zinc-900">Tahun Ajaran & Kelas</div>
                        <div class="text-xs text-zinc-500">2026/2027 Semester Ganjil</div>
                    </div>
                    <span class="text-xs font-semibold text-purple-600">Atur</span>
                </div>
                <div class="p-3 rounded-lg border border-zinc-200 bg-zinc-50 flex items-center justify-between">
                    <div>
                        <div class="font-medium text-zinc-900">Laporan & Ekspor Data</div>
                        <div class="text-xs text-zinc-500">Unduh rekap bulanan Excel/PDF</div>
                    </div>
                    <span class="text-xs font-semibold text-purple-600">Unduh</span>
                </div>
            </div>
        </div>

        <!-- Ringkasan Log Aktivitas Presensi -->
        <div class="lg:col-span-2 p-6 rounded-xl border border-zinc-200 bg-white shadow-xs">
            <h3 class="text-base font-semibold text-zinc-900 mb-4">Aktivitas Presensi Sekolah Terkini</h3>
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm">
                    <thead>
                        <tr class="text-xs text-zinc-500 border-b border-zinc-200">
                            <th class="pb-2 font-medium">Waktu</th>
                            <th class="pb-2 font-medium">Pengguna</th>
                            <th class="pb-2 font-medium">Peran</th>
                            <th class="pb-2 font-medium">Aktivitas</th>
                            <th class="pb-2 text-right font-medium">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-zinc-100">
                        <tr>
                            <td class="py-2.5 text-xs text-zinc-500">07:05 WIB</td>
                            <td class="py-2.5 font-medium text-zinc-900">Siti (2026001)</td>
                            <td class="py-2.5 text-xs text-zinc-500">Siswa (X RPL)</td>
                            <td class="py-2.5 text-xs text-zinc-600">Absen Masuk Gerbang</td>
                            <td class="py-2.5 text-right"><span
                                    class="px-2 py-0.5 rounded text-xs bg-emerald-50 text-emerald-700 border border-emerald-200 font-medium">Tepat
                                    Waktu</span></td>
                        </tr>
                        <tr>
                            <td class="py-2.5 text-xs text-zinc-500">07:00 WIB</td>
                            <td class="py-2.5 font-medium text-zinc-900">H. Abu</td>
                            <td class="py-2.5 text-xs text-zinc-500">Guru</td>
                            <td class="py-2.5 text-xs text-zinc-600">Presensi Guru Hadir</td>
                            <td class="py-2.5 text-right"><span
                                    class="px-2 py-0.5 rounded text-xs bg-emerald-50 text-emerald-700 border border-emerald-200 font-medium">Tepat
                                    Waktu</span></td>
                        </tr>
                        <tr>
                            <td class="py-2.5 text-xs text-zinc-500">06:58 WIB</td>
                            <td class="py-2.5 font-medium text-zinc-900">Ani (2026002)</td>
                            <td class="py-2.5 text-xs text-zinc-500">Siswa (X RPL)</td>
                            <td class="py-2.5 text-xs text-zinc-600">Absen Masuk Gerbang</td>
                            <td class="py-2.5 text-right"><span
                                    class="px-2 py-0.5 rounded text-xs bg-emerald-50 text-emerald-700 border border-emerald-200 font-medium">Tepat
                                    Waktu</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
