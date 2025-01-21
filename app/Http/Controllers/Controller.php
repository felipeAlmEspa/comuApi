<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    

    public function getHermanos(){
        $data = [
            [
                'id' => 1,
                'nombres' => 'Katherine Giselle',
                'apellidos' => 'Campoverde Condo',
                'fecha_nacimiento' => '2001-09-11',
                'telefono' => '0982845817',
                'direccion' => 'Parroquia Sidcay - Ricaurte',
            ],
            [
                'id' => 2,
                'nombres' => 'Pablo Andrés',
                'apellidos' => 'Arizaga Guzman',
                'fecha_nacimiento' => '2009-12-20',
                'telefono' => '0983282061',
                'direccion' => 'calle de los migrantes',
            ],
            [
                'id' => 3,
                'nombres' => 'Victor Andrés',
                'apellidos' => 'Calderón Padilla',
                'fecha_nacimiento' => null,
                'telefono' => '0967448314',
                'direccion' => 'Miraflores barrio el progreso',
            ],];
             // Validar que los IDs no se repitan
    $uniqueData = array_unique($data, SORT_REGULAR);

    return response()->json([
        'status' => 'success',
        'data' => $uniqueData
    ]);
    }
}