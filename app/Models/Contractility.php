<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contractility extends Model
{
    use HasFactory;

    protected $table = 'tbl_contractiliy';

    protected $fillable = [
        'sample_id',
        'frequency_id',
        'frequency',
    ];

    // Relacionamento com tbl_sample
    public function sample()
    {
        return $this->belongsTo(Sample::class, 'sample_id');
    }

    // Relacionamento com tbl_frequency
    public function frequency()
    {
        return $this->belongsTo(Frequency::class, 'frequency_id');
    }
}
