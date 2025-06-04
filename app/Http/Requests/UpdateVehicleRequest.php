<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $currentYear = date('Y');
        return [
            'brand' => 'sometimes|required|string|max:255',
            'model' => 'sometimes|required|string|max:255',
            'license_plate' => 'sometimes|required|string|max:10',
            'chassis' => 'sometimes|required|string|max:50',
            'year' => "sometimes|required|integer|min:1900|max:$currentYear",
            'color' => 'sometimes|required|string|max:50',
        ];
    }
}