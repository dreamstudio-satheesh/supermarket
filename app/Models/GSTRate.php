<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GSTRate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function taxEntries()
    {
        return $this->hasMany(TaxEntry::class);
    }
}
