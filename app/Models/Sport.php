<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasVersion7Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sport extends Model
{
    use HasFactory;
    use HasVersion7Uuids;
    use SoftDeletes;

    /**
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    public function positions(): HasMany
    {
        return $this->hasMany(Position::class)->orderBy('sort_order', 'asc');
    }

    public function competitions(): HasMany
    {
        return $this->hasMany(Competition::class);
    }
}
