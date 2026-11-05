<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {

            // Ambil ID Role
            $roles = DB::table('roles')
                ->pluck('id', 'name');

            // =====================================
            // STUDENTS
            // =====================================

            $students = [
                [
                    'name' => 'Siti',
                    'email' => 'siti@example.com',
                    'password' => 'siswa101',
                    'nis' => '2026001',
                    'gender' => 'female',
                ],
                [
                    'name' => 'Ani',
                    'email' => 'ani@example.com',
                    'password' => 'siswa102',
                    'nis' => '2026002',
                    'gender' => 'female',
                ],
                [
                    'name' => 'Hansen',
                    'email' => 'hansen@example.com',
                    'password' => 'siswa103',
                    'nis' => '2026003',
                    'gender' => 'male',
                ],
            ];

            foreach ($students as $student) {

                $user = DB::table('users')->updateOrInsert(
                    ['email' => $student['email']],
                    [
                        'role_id' => $roles['siswa'],
                        'name' => $student['name'],
                        'password' => Hash::make($student['password']),
                        'is_active' => true,
                        'email_verified_at' => now(),
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]
                );

                $userId = DB::table('users')
                    ->where('email', $student['email'])
                    ->value('id');

                DB::table('students')->updateOrInsert(
                    ['user_id' => $userId],
                    [
                        'nis' => $student['nis'],
                        'gender' => $student['gender'],
                        'status' => 'active',
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]
                );
            }

            // =====================================
            // TEACHERS
            // =====================================

            $teachers = [
                [
                    'name' => 'H. Abu',
                    'email' => 'abu@example.com',
                    'password' => 'guru201',
                    'nip' => '19800101001',
                    'gender' => 'male',
                ],
                [
                    'name' => 'H. Maimunah',
                    'email' => 'maimunah@example.com',
                    'password' => 'guru202',
                    'nip' => '19800101002',
                    'gender' => 'female',
                ],
            ];

            foreach ($teachers as $teacher) {

                DB::table('users')->updateOrInsert(
                    ['email' => $teacher['email']],
                    [
                        'role_id' => $roles['guru'],
                        'name' => $teacher['name'],
                        'password' => Hash::make($teacher['password']),
                        'is_active' => true,
                        'email_verified_at' => now(),
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]
                );

                $userId = DB::table('users')
                    ->where('email', $teacher['email'])
                    ->value('id');

                DB::table('teachers')->updateOrInsert(
                    ['user_id' => $userId],
                    [
                        'nip' => $teacher['nip'],
                        'gender' => $teacher['gender'],
                        'employment_status' => 'permanent',
                        'updated_at' => now(),
                        'created_at' => now(),
                    ]
                );
            }

            // =====================================
            // SUPER ADMIN
            // =====================================

            DB::table('users')->updateOrInsert(
                ['email' => 'admin@example.com'],
                [
                    'role_id' => $roles['super_admin'],
                    'name' => 'Anandagharyn Sinulingga',
                    'password' => Hash::make('superadmin'),
                    'is_active' => true,
                    'email_verified_at' => now(),
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );

        });
    }
}
