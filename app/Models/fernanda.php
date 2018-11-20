<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class fernanda
 * @package App\Models
 * @version November 6, 2018, 12:02 pm UTC
 *
 * @property string nombre
 * @property string apellidos
 * @property string correo
 */
class fernanda extends Model
{
    use SoftDeletes;

    public $table = 'fernandas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'apellidos',
        'correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'apellidos' => 'string',
        'correo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'apellidos' => 'required',
        'correo' => 'email'
    ];

    
}
