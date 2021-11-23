<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Support\Helper;

class Product extends Model
{
    use HasFactory;
    use HasAdvancedFilter;

    public $table = 'products';

    public function __construct(array $attributes = array())
    {
        $this->setRawAttributes(array(
            'code' => Helper::genCode()
        ), true);
        parent::__construct($attributes);
    }
    const STATUS_ACITVE = 1;
    const STATUS_INACTIVE = 0;

    const STOCK_ACITVE = 1;
    const STOCK_INACTIVE = 0;

    public $orderable = [
        'created_at',
        'id',
        'code',
        'status',
        'stock',
        'name',
        'price',
        'wholesale_price',
        ];

    public $filterable = [
        'created_at',
        'id',
        'code',
        'status',
        'stock',
        'name',
        'price',
        'wholesale_price',
    ];
    protected $fillable = [
        'code',
        'id',
        'name',
        'price',
        'stock',
        'status',
        'wholesale_price',
        'image',
        'vendor_id',
        'admin_id',
        'description',
        'category', // not required 
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function vendor()
    {
        return $this->belongsTo(User::class, 'vendor_id', 'id');
    }

}
