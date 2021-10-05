<?php

namespace App\Repositories;

use App\Models\sale;
use App\Repositories\BaseRepository;

/**
 * Class saleRepository
 * @package App\Repositories
 * @version October 3, 2021, 6:33 am UTC
*/

class saleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Super_Sale',
        'Best_Sale'
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
        return sale::class;
    }
}
