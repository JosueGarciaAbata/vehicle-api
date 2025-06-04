# Vehicle REST API (Laravel)

This project implements a RESTful API for managing vehicles using Laravel, following a clean architecture with Service and Repository layers.

## Features

- CRUD operations for the Vehicle entity
- Layered architecture: Controller → Service → Repository → Model
- Request validation using Form Requests
- Exception handling with JSON error responses
- Standardized API responses

## Vehicle Fields

- `id` (auto-increment, primary key)
- `brand` (string, required)
- `model` (string, required)
- `license_plate` (string, required)
- `chassis` (string, required)
- `year` (integer, required, 1900 ≤ year ≤ current year)
- `color` (string, required)

## Endpoints

| Method | Endpoint           | Description         |
|--------|--------------------|---------------------|
| GET    | /api/vehicles      | List all vehicles   |
| GET    | /api/vehicles/{id} | Get a vehicle       |
| POST   | /api/vehicles      | Create a vehicle    |
| PUT    | /api/vehicles/{id} | Update a vehicle    |
| DELETE | /api/vehicles/{id} | Delete a vehicle    |

## Validation

Validation is handled via `StoreVehicleRequest` and `UpdateVehicleRequest` classes. All fields are required and validated for type and length.

## Error Handling

If a vehicle is not found or validation fails, the API returns a JSON error response with an appropriate HTTP status code.

## Quick Start

1. Clone the repository.
2. Run `composer install`.
3. Configure your `.env` file for the database.
4. Run migrations: `php artisan migrate`.
5. Start the server: `php artisan serve`.

## Example Response

**Success:**
```json
{
  "id": 1,
  "brand": "Toyota",
  "model": "Corolla",
  "license_plate": "ABC123",
  "chassis": "XYZ987654321",
  "year": 2020,
  "color": "Red"
}
