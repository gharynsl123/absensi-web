<?php

use App\Models\Role;
use App\Models\User;

test('guests are redirected to the login page', function () {
    $response = $this->get(route('dashboard'));
    $response->assertRedirect(route('login'));
});

test('authenticated users can visit the dashboard', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    $response = $this->get(route('dashboard'));
    $response->assertOk();
});

test('student sees student dashboard view', function () {
    $role = Role::firstOrCreate(['name' => 'siswa']);
    $user = User::factory()->create(['role_id' => $role->id]);

    $response = $this->actingAs($user)->get(route('dashboard'));

    $response->assertOk();
    $response->assertSee('Panel Siswa');
    $response->assertSee('Selamat Datang, '.$user->name);
});

test('teacher sees teacher dashboard view', function () {
    $role = Role::firstOrCreate(['name' => 'guru']);
    $user = User::factory()->create(['role_id' => $role->id]);

    $response = $this->actingAs($user)->get(route('dashboard'));

    $response->assertOk();
    $response->assertSee('Panel Guru');
    $response->assertSee('Selamat Datang, '.$user->name);
});

test('super admin sees super admin dashboard view', function () {
    $role = Role::firstOrCreate(['name' => 'super_admin']);
    $user = User::factory()->create(['role_id' => $role->id]);

    $response = $this->actingAs($user)->get(route('dashboard'));

    $response->assertOk();
    $response->assertSee('Panel Super Administrator');
    $response->assertSee('Selamat Datang, '.$user->name);
});

test('kaprodi sees hod dashboard view', function () {
    $role = Role::firstOrCreate(['name' => 'kaprodi']);
    $user = User::factory()->create(['role_id' => $role->id]);

    $response = $this->actingAs($user)->get(route('dashboard'));

    $response->assertOk();
    $response->assertSee('Panel Ketua Program Studi (Kaprodi)');
    $response->assertSee('Selamat Datang, '.$user->name);
});
