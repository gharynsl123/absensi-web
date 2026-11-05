<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendancePermissions extends Model
{
    protected $table = 'attendance_permissions';
    protected $guarded = [];

    public function students() {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
