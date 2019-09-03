<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Jawaban
 * @package App\Models
 * @version September 3, 2019, 1:19 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property string isi_jawaban
 * @property integer pertanyaan_id
 */
class Jawaban extends Model
{
    use SoftDeletes;

    public $table = 'jawabans';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'isi_jawaban',
        'pertanyaan_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'isi_jawaban' => 'string',
        'pertanyaan_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pertanyaan_id' => 'required'
    ];

    
}
