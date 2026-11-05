<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $table = 'departements';
    protected $guarded = [];

    public function head_user() {
        return $this->belongsTo(User::class, 'head_user_id', 'id');
    }
}
