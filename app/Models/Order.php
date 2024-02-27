<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'product_id',
        'customer_id',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const STATUS_RADIO = [
        'pending'    => 'Pending',
        'processing' => 'Processing',
        'shipped'    => 'Shipped',
        'delivered'  => 'Delivered',
        'returned'   => 'Returned',
        'cancelled'  => 'Cancelled',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
