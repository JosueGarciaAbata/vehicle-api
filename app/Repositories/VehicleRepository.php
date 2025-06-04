<?php

namespace App\Repositories;

use App\Models\Vehicle;

/**
 * Class VehicleRepository
 * @package App\Repositories
 *
 * This class implements the VehicleRepositoryInterface to handle vehicle data operations.
 */
class VehicleRepository implements VehicleRepositoryInterface
{
    public function all()
    {
        return Vehicle::all();
    }

    public function find($id)
    {
        return Vehicle::find($id);
    }

    public function create(array $data)
    {
        return Vehicle::create($data);
    }

    public function update($id, array $data)
    {
        $vehicle = $this->find($id);
        if ($vehicle) {
            $vehicle->update($data);
            return $vehicle;
        }
        return null;
    }

    public function delete($id)
    {
        $vehicle = $this->find($id);
        if ($vehicle) {
            $vehicle->delete();
            return true;
        }
        return false;
    }
}