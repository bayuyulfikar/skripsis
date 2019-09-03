<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hasil
 * @package App\Models
 * @version September 3, 2019, 1:20 pm UTC
 *
 * @property \App\Models\Pertanyaan pertanyaan
 * @property \App\Models\User users
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property integer pertanyaan_id
 * @property integer jawaban_id
 * @property integer users_id
 */
class Hasil extends Model
{
    use SoftDeletes;

    public $table = 'hasils';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'pertanyaan_id',
        'jawaban_id',
        'users_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pertanyaan_id' => 'integer',
        'jawaban_id' => 'integer',
        'users_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pertanyaan_id' => 'required',
        'jawaban_id' => 'required',
        'users_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pertanyaan()
    {
        return $this->belongsTo(\App\Models\Pertanyaan::class, 'pertanyaan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }
}
