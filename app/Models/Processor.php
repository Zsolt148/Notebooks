<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer',
        'type',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notebooks()
    {
        return $this->hasMany(Notebook::class, 'processor_id');
    }
}
