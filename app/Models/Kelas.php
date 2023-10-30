<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $guarded = [
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

    public function students()
    {
        return $this->belongsTo('App\Models\Student', 'id_student');
    }

}
