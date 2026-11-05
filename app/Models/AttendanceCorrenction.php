<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Psy\Readline\GNUReadline;

class AttendanceCorrection extends Model
{
    protected $table = 'attendance_corrections';
    protected $guarded = [];

    public function students_attendance() {
        return $this->belongsTo(Student::class, 'student_attendance_id', 'id');
    }

    public function reuqest_by() {
        return $this->belongsTo(User::class, 'requested_by', 'id');
    }

    public function approved_by() {
        return $this->belongsTo(User::class, 'approved_by', 'id');
    }
}
