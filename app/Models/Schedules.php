<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $table = 'schedules';
    protected $guarded = [];

    public function teaching_assignments() {
        return $this->belongsTo(TeachingAssignment::class, 'teaching_assignment_id', 'id');
    }
}
