<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Carbon\CarbonImmutable;

/**
 * 
 *
 * @property int $id
 * @property int $book_id
 * @property CarbonImmutable $created_at
 * @property-read \App\Models\Book $book
 * @method static \Database\Factories\BookStockFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookStock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookStock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BookStock query()
 * @mixin \Eloquent
 */
class BookStock extends Model
{
    use HasFactory;

    public const null|string UPDATED_AT = null;

    protected $fillable = [
        'book_id',
    ];

    protected $casts = [
        'id' => 'int',
        'book_id' => 'int',
        'created_at' => 'immutable_datetime',
    ];

    /**
     * @return BelongsTo<Book, $this>
     */
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
