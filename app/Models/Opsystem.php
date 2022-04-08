<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opsystem extends Model
{
    use HasFactory;

    protected $fillable = [
        'os_name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notebooks()
    {
        return $this->hasMany(Notebook::class, 'opsystem_id');
    }

    /**
     * @return string
     */
    public function getNameAttribute()
    {
        return "{$this->os_name}";
    }
}
