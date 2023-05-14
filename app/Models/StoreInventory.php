<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreInventory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function storeLocation()
    {
        return $this->belongsTo(StoreLocation::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
