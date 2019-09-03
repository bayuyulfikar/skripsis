<?php

namespace App\Repositories;

use App\Models\Hasil;
use App\Repositories\BaseRepository;

/**
 * Class HasilRepository
 * @package App\Repositories
 * @version September 3, 2019, 1:20 pm UTC
*/

class HasilRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pertanyaan_id',
        'jawaban_id',
        'users_id'
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
        return Hasil::class;
    }
}
