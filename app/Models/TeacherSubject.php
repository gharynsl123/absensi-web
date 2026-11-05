<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherSubject extends Model
{
    protected $table = 'teacher_subjects';
    protected $guarded = [];

    public function academic_years() {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id', 'id');
    }

    public function subjects() {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function teachers() {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
