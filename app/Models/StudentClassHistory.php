<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentClassHistory extends Model
{
    protected $table = 'student_class_histories';
    protected $guarded = [];

    public function students() {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

    public function classes() {
        return $this->belongsTo(ClassRoom::class, 'class_id', 'id');
    }

    public function academic_years() {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id', 'id');
    }
}
