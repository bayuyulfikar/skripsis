<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pertanyaan
 * @package App\Models
 * @version September 3, 2019, 1:17 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection pertanyaans
 * @property \Illuminate\Database\Eloquent\Collection 
 * @property string isi_pertanyaan
 */
class Pertanyaan extends Model
{
    use SoftDeletes;

    public $table = 'pertanyaans';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'isi_pertanyaan'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'isi_pertanyaan' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function pertanyaans()
    {
        return $this->hasMany(\App\Models\Hasil::class, 'pertanyaan_id');
    }
}
