<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer',
        'type',
        'display',
        'memory',
        'harddisk',
        'videocontroller',
        'price',
        'processor_id',
        'opsystem_id',
        'pieces'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function opsystem()
    {
        return $this->belongsTo(Opsystem::class, 'opsystem_id');
    }
}
