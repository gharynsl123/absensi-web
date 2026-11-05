<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceSession extends Model
{
    protected $table = 'attendance_sessions';
    protected $guarded = [];

    public function schedules() {
        return $this->belongsTo(Schedules::class, 'schedule_id', 'id');
    }
}
