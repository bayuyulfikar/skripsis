<?php

namespace App\Repositories;

use App\Models\Pertanyaan;
use App\Repositories\BaseRepository;

/**
 * Class PertanyaanRepository
 * @package App\Repositories
 * @version September 3, 2019, 1:17 pm UTC
*/

class PertanyaanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'isi_pertanyaan'
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
        return Pertanyaan::class;
    }
}
