<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use App\Services\SedeService;

class SedeController extends Controller
{
    protected SedeService $sedeService;

    public function __construct(SedeService $sedeService)
    {
        $this->sedeService = $sedeService;
    }


    public function index(): JsonResponse
    {
        $sedes = $this->sedeService->getAll();

        return response()->json($sedes);
    }
}
