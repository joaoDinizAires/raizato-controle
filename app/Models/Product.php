<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
        "code",
        "sale_price",
        "cost_price",
        "quantity",
        "supplier_id",
        "expiration_date"
    ];
    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }
}
