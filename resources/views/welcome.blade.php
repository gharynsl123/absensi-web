<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        @fonts

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script>
            document.documentElement.classList.remove('dark');
        </script>
    </head>
    <body class="bg-zinc-50 text-zinc-900 flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col antialiased">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ route('dashboard') }}"
                            class="inline-block px-5 py-1.5 border border-zinc-300 hover:border-zinc-400 text-zinc-800 bg-white rounded-md text-sm font-medium transition shadow-xs"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 border border-zinc-300 hover:border-zinc-400 text-zinc-800 bg-white rounded-md text-sm font-medium transition shadow-xs"
                        >
                            Log in
                        </a>
                    @endauth
                </nav>
            @endif
        </header>

        <div class="flex items-center justify-center w-full lg:grow">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row shadow-sm rounded-xl overflow-hidden border border-zinc-200 bg-white">
                <div class="text-[13px] leading-[20px] flex-1 p-6 lg:p-16 bg-white text-zinc-800 flex flex-col justify-center">
                    <h1 class="text-xl lg:text-2xl font-bold text-zinc-900 mb-3">Selamat Datang Di Sistem Absensi SMK Muhammadiyah 2 Kuningan</h1>
                    <p class="mb-6 text-zinc-600 leading-relaxed" style="text-align: justify">
                        Kami hadir untuk memberikan kemudahan dalam proses pencatatan kehadiran melalui sistem absensi digital yang praktis, cepat, dan efisien. Dengan teknologi yang terintegrasi, setiap proses kehadiran kini dapat dilakukan dengan lebih mudah, akurat, dan nyaman.<br><br>
                        Mari bersama membangun lingkungan pendidikan yang disiplin, modern, dan berkemajuan.
                    </p>
                    <div class="flex gap-3 text-sm">
                        <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-2 bg-zinc-900 hover:bg-black text-white font-medium rounded-lg shadow-sm transition">
                            Login Now &rarr;
                        </a>
                    </div>
                </div>
                <div class="bg-zinc-100 relative w-full lg:w-[420px] shrink-0 min-h-[260px] lg:min-h-full">
                    <img
                        class="absolute inset-0 w-full h-full object-cover object-center"
                        src="{{ asset('images/gedung-smk-muhammadiyah.jpg') }}"
                        alt="SMK Muhammadiyah 2 Kuningan"
                        onerror="this.parentElement.classList.add('bg-gradient-to-br', 'from-blue-600', 'to-indigo-800'); this.style.display='none';">
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-10 hidden lg:block"></div>
        @endif
    </body>
</html>
