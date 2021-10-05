<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class pricing
 * @package App\Models
 * @version October 3, 2021, 6:27 am UTC
 *
 * @property number $Best_Price
 * @property number $Special_Price
 * @property number $Super_Deals
 */
class pricing extends Model
{
   // use SoftDeletes;

    use HasFactory;

    public $table = 'pricing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Best_Price',
        'Special_Price',
        'Super_Deals'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Best_Price' => 'decimal:2',
        'Special_Price' => 'decimal:2',
        'Super_Deals' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Best_Price' => 'nullable|numeric',
        'Special_Price' => 'nullable|numeric',
        'Super_Deals' => 'nullable|numeric',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
