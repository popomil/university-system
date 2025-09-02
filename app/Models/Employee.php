<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'role',
        'manager_id',
        'department_id',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function manager()
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }
    public function subordinates()
    {
        return $this->hasMany(Employee::class, 'manager_id');
    }
}
