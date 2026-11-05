<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherAttendance extends Model
{
    protected $table = 'teacher_attendances';
    protected $guarded = [];

    public function teachers() {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function schedule() {
        return $this->belongsTo(Schedules::class, 'schedule_id', 'id');
    }
}
