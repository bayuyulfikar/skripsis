<?php

namespace App\Repositories;

use App\Models\Jawaban;
use App\Repositories\BaseRepository;

/**
 * Class JawabanRepository
 * @package App\Repositories
 * @version September 3, 2019, 1:19 pm UTC
*/

class JawabanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'isi_jawaban',
        'pertanyaan_id'
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
        return Jawaban::class;
    }
}
