<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $currentYear = date('Y');
        return [
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'license_plate' => 'required|string|max:50',
            'chassis' => 'required|string|max:50',
            'year' => "required|integer|min:1900|max:$currentYear",
            'color' => 'required|string|max:50',
        ];
    }
}