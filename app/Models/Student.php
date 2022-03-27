<?php

namespace App\Models;

use App\Models\Program;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function program()
    {
        return $this->belongsTo(Program::class, $foreignKey = 'programId', $localKey = 'programId');
    }

    public function getRouteKeyName()
    {
        return 'no_peserta';
    }
}
