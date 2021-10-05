<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class product
 * @package App\Models
 * @version October 3, 2021, 6:07 am UTC
 *
 * @property string $Product_Name
 * @property string $Product_Brand
 * @property number $Price
 * @property string $Description
 */
class product extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_Name',
        'Product_Brand',
        'Price',
        'Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product_Name' => 'string',
        'Product_Brand' => 'string',
        'Price' => 'decimal:2',
        'Description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_Name' => 'nullable|string|max:100',
        'Product_Brand' => 'nullable|string|max:100',
        'Price' => 'nullable|numeric',
        'Description' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
