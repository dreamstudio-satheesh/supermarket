<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreLocation extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function storeInventory()
    {
        return $this->hasMany(StoreInventory::class);
    }
}
