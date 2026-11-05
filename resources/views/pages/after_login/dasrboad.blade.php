<x-layouts::app :title="__('Dashboard')">
    @php
        $role = $roleView ?? (auth()->user()?->roleName() ?? 'student');
        $partial = match ($role) {
            'siswa', 'student' => 'student',
            'guru', 'teacher' => 'teacher',
            'super-admin', 'super_admin', 'admin' => 'super-admin',
            'kaprodi', 'hod', 'head-of-department' => 'hod',
            default => 'student',
        };
    @endphp

    <div class="flex h-full w-full flex-1 flex-col gap-6">
        @include('pages.after_login.partials.' . $partial)
    </div>
</x-layouts::app>
