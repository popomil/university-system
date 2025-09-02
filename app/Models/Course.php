<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =['name','code','cost','hours','department_id'];
        public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
