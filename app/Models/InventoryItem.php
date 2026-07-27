<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;

    protected $table = 'inventory_items';

    protected $fillable = [
        'sku',
        'name',
        'division',
        'category',
        'quantity',
        'reorder_level',
        'unit_price',
        'supplier',
        'description',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'reorder_level' => 'integer',
        'unit_price' => 'decimal:2',
    ];

    public function status(): string
    {
        if ($this->quantity <= 0) {
            return 'out';
        }
        if ($this->quantity <= $this->reorder_level) {
            return 'low';
        }
        return 'in';
    }

    public function displayStock(): string
    {
        if ($this->quantity <= 0) {
            return 'Out';
        }
        if ($this->quantity <= $this->reorder_level) {
            return 'Low';
        }
        return 'In Stock';
    }
}
