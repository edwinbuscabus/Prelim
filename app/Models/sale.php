<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class sale
 * @package App\Models
 * @version October 3, 2021, 6:33 am UTC
 *
 * @property number $Super_Sale
 * @property number $Best_Sale
 */
class sale extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'sale';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Super_Sale',
        'Best_Sale'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Super_Sale' => 'decimal:2',
        'Best_Sale' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Super_Sale' => 'nullable|numeric',
        'Best_Sale' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
