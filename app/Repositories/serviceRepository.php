<?php

namespace App\Repositories;

use App\Models\service;
use App\Repositories\BaseRepository;

/**
 * Class serviceRepository
 * @package App\Repositories
 * @version October 3, 2021, 6:16 am UTC
*/

class serviceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Fast Delivery',
        'Super Taste',
        'Contact Us'
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
        return service::class;
    }
}
