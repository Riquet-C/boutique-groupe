<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'pictureUrl',
        'descProducts',
        'price',
        'weight',
        'discount',
        'categoryId',
        'available'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId')->withPivot('quantity');
    }

    public function cart()
    {
        return $this->belongsToMany(Cart::class);
    }

    function formattedPrice(): float
    {
        return $this->price / 100;
    }

    function priceExcludingVAT(): float|int
    {
        $TVA = 20;
        return (100 * $this->price / 100) / (100 + $TVA);
    }

    function discountedPrice(): float|int
    {
        return (($this->price / 100) * (100 - $this->discount)) / 100;
    }
}
