<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasVersion7Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory;
    use HasVersion7Uuids;
    use SoftDeletes;

    /**
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'bio',
        'dob',
        'user_id',
    ];

    protected function casts()
    {
        return [
            'dob' => 'date',
        ];
    }

    protected $with = [
        'user',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
