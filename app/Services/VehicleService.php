<?php

namespace App\Services;

use App\Repositories\VehicleRepositoryInterface;

/**
 * Class VehiculoService
 * @package App\Services
 *
 * This service class provides an interface for vehicle-related operations,
 * delegating the actual data handling to the VehicleRepositoryInterface.
 */
class VehicleService
{
    protected $vehicleRepository;

    public function __construct(VehicleRepositoryInterface $vehicleRepository)
    {
        $this->vehicleRepository = $vehicleRepository;
    }

    public function all()
    {
        return $this->vehicleRepository->all();
    }

    public function findById($id)
    {
        $vehicle = $this->vehicleRepository->find($id);
        if (!$vehicle) {
            abort(404, 'Vehicle not found');
        }
        return $vehicle;
    }

    public function create(array $data)
    {
        return $this->vehicleRepository->create($data);
    }

    public function update($id, array $data)
    {
        $vehicle = $this->vehicleRepository->find($id);
        if (!$vehicle) {
            abort(404, 'Vehicle not found');
        }
        return $this->vehicleRepository->update($id, $data);
    }

    public function delete($id)
    {
        $vehicle = $this->vehicleRepository->find($id);
        if (!$vehicle) {
            abort(404, 'Vehicle not found');
        }
        return $this->vehicleRepository->delete($id);
    }
}