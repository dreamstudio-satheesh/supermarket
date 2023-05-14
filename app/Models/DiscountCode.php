<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function saleDiscounts()
    {
        return $this->hasMany(SaleDiscount::class);
    }
}
