<?php

namespace App\Models;

use App\Models\Validate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function select()
    {
        return $this->hasMany(Select::class, $foreignKey = 'select', $localKey = 'select_id');
    }
    public function program()
    {
        return $this->hasMany(Program::class, $foreignKey = 'select_name', $localKey = 'select_id');
    }
    public function validates()
    {
        return $this->hasOne(Validate::class, $foreignKey = 'rules', $localKey = 'nameInput');
    }
}
