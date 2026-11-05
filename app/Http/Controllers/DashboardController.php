<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display the role-based dashboard.
     */
    public function index(Request $request)
    {
        /** @var User|null $user */
        $user = $request->user();

        // Get normalized role
        $roleName = ($user instanceof User) ? $user->roleName() : 'siswa';

        // Map role name to corresponding view partial
        $roleView = match ($roleName) {
            'siswa', 'student' => 'student',
            'guru', 'teacher' => 'teacher',
            'super-admin', 'super_admin', 'admin' => 'super-admin',
            'kaprodi', 'hod', 'head-of-department' => 'hod',
            default => 'student',
        };

        return view('dashboard', [
            'user' => $user,
            'roleView' => $roleView,
        ]);
    }
}

