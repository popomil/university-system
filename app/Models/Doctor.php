<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable =['name','age','address','gender','salary'];
      public function students()
    {
        return $this->hasMany(Student::class);
    }
}
