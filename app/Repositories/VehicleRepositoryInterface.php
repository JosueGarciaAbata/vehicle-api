<?php

namespace App\Repositories;

/**
 * Interface VehicleRepositoryInterface
 * @package App\Repositories
 *
 * This interface defines the contract for vehicle repository implementations.
 */
interface VehicleRepositoryInterface
{
    public function all();
    
    public function find($id);
    
    public function create(array $data);
    
    public function update($id, array $data);
    
    public function delete($id);
}