<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDiscount extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function discountCode()
    {
        return $this->belongsTo(DiscountCode::class);
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

   
}
