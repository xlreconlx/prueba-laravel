<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class SedeController extends Controller
{
    public function index(): JsonResponse
    {
        $sedes = [
            [
                'code' => 1,
                'name' => 'Sede Principal',
                'image' => 'https://via.placeholder.com/150?text=Sede+Principal',
                'creationDate' => '2023-01-01',
            ],
            [
                'code' => 2,
                'name' => 'Sede Norte',
                'image' => 'https://via.placeholder.com/150?text=Sede+Norte',
                'creationDate' => '2023-03-15',
            ],
            [
                'code' => 3,
                'name' => 'Sede Sur',
                'image' => 'https://via.placeholder.com/150?text=Sede+Sur',
                'creationDate' => '2023-06-10',
            ],
        ];

        return response()->json($sedes);
    }
}
