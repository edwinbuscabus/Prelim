<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class service
 * @package App\Models
 * @version October 3, 2021, 6:16 am UTC
 *
 * @property string $Fast Delivery
 * @property string $Super Taste
 * @property string $Contact Us
 */
class service extends Model
{
   // use SoftDeletes;

    use HasFactory;

    public $table = 'service';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Fast Delivery',
        'Super Taste',
        'Contact Us'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Fast Delivery' => 'string',
        'Super Taste' => 'string',
        'Contact Us' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Fast Delivery' => 'nullable|string|max:200',
        'Super Taste' => 'nullable|string|max:100',
        'Contact Us' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
