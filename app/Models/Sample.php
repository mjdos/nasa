<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;

    protected $table = 'tbl_sample';

    protected $fillable = ['name'];

    public function contractilities()
    {
        return $this->hasMany(Contractility::class, 'sample_id');
    }

    
}
