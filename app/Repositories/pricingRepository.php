<?php

namespace App\Repositories;

use App\Models\pricing;
use App\Repositories\BaseRepository;

/**
 * Class pricingRepository
 * @package App\Repositories
 * @version October 3, 2021, 6:27 am UTC
*/

class pricingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Best_Price',
        'Special_Price',
        'Super_Deals'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return pricing::class;
    }
}
