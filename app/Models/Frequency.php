<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frequency extends Model
{
    use HasFactory;

    protected $table = 'tbl_frequency';

    protected $fillable = ['name'];

    public function contractilities()
    {
        return $this->hasMany(Contractility::class, 'frequency_id');
    }
}
