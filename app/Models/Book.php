<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'author_id'
    ];

    /**
     * Function : author
     * @relationType : belongsTo
     * @return author
     */
    public function author() {
        return $this->belongsTo(Author::class);
    }

    /**
     * Function : publisher
     * @relationType : hasOne
     * @return publisher
     */
    public function publisher() {
        return $this->hasOne(Publisher::class);
    }
}
