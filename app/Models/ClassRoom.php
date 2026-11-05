<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    protected $table = 'classes';
    protected $guarded = [];

    public function department() {
        return $this->belongsTo(Departement::class, 'department_id', 'id');
    }

    public function grade() {
        return $this->belongsTo(Grade::class, 'grade_id', 'id');
    }

    public function academic_year() {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id', 'id');
    }

    public function homeroom_teacher() {
        return $this->belongsTo(Teacher::class, 'homeroom_teacher_id', 'id');
    }
}
