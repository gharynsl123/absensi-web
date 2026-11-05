<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAttendance extends Model
{
    protected $table = 'student_attendances';
    protected $guarded = [];

    public function students() {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function attendance_session() {
        return $this->belongsTo(AttendanceSession::class, 'attendance_session_id', 'id');
    }
}
