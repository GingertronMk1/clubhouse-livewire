<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasVersion7Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
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
        'preview_x',
        'preview_y',
        'sort_order',
        'default_number',
    ];

    protected $with = [
        'sport',
    ];

    public function sport(): BelongsTo
    {
        return $this->belongsTo(Sport::class);
    }
}
