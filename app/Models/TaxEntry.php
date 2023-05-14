<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxEntry extends Model
{
    use HasFactory;

    public function gstRate()
    {
        return $this->belongsTo(GSTRate::class);
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
