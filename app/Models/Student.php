<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable =['name','age','address','gender','code','doctor_id'];
   public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
