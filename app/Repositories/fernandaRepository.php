<?php

namespace App\Repositories;

use App\Models\fernanda;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class fernandaRepository
 * @package App\Repositories
 * @version November 6, 2018, 12:02 pm UTC
 *
 * @method fernanda findWithoutFail($id, $columns = ['*'])
 * @method fernanda find($id, $columns = ['*'])
 * @method fernanda first($columns = ['*'])
*/
class fernandaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'apellidos',
        'correo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return fernanda::class;
    }
}
