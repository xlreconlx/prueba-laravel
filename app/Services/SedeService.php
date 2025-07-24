<?php

namespace App\Services;

class SedeService
{
    public function getAll(): array
    {
        return [
            [
                'code' => 1,
                'name' => 'Sede Principal',
                'image' => 'https://dummyimage.com/600x400/000/fff&text=Sede+Principal',
                'creationDate' => '2023-01-01',
            ],
            [
                'code' => 2,
                'name' => 'Sede Norte',
                'image' => 'https://dummyimage.com/600x400/000/fff&text=Sede+Norte',
                'creationDate' => '2023-03-15',
            ],
            [
                'code' => 3,
                'name' => 'Sede Sur',
                'image' => 'https://dummyimage.com/600x400/000/fff&text=Sede+Sur',
                'creationDate' => '2023-06-10',
            ],
        ];
    }
}