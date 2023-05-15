<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxEntry extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gstRate()
    {
        return $this->belongsTo(GSTRate::class);
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
