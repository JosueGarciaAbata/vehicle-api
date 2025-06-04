<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Services\VehicleService;
use Illuminate\Http\JsonResponse;


class VehicleController extends Controller
{
     protected $vehicleService;

    public function __construct(VehicleService $vehicleService)
    {
        $this->vehicleService = $vehicleService;
    }

    public function index(): JsonResponse
    {
        $vehicles = $this->vehicleService->all();
        return response()->json($vehicles, 200);
    }

    public function show($id): JsonResponse
    {
        $vehicle = $this->vehicleService->findById($id);
        return response()->json($vehicle, 200);
    }

    public function store(StoreVehicleRequest $request): JsonResponse
    {
        $vehicle = $this->vehicleService->create($request->validated());
        return response()->json($vehicle, 201);
    }


    public function update(UpdateVehicleRequest $request, $id): JsonResponse
    {
        $vehicle = $this->vehicleService->update($id, $request->validated());
        return response()->json($vehicle, 200);
    }

    public function destroy($id): JsonResponse
    {
        $this->vehicleService->delete($id);
        return response()->json(['message' => 'Vehicle deleted successfully'], 204);
    }
}
