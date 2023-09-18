<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email'
    ];

    /**
     * Function : book
     * @relationType : hasOne
     * @return book
     */
    public function book() {
        return $this->hasOne(Book::class);
    }

    /**
     * Function : bookPublisher
     * @relationType : hasOneThrough
     * @return bookPublisher
     */
    public function bookPublisher() {
        return $this->hasOneThrough(Publisher::class, Book::class);
    }
}
