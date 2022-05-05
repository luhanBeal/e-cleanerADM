<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //validando os campos
            'name' => ['required', 'min:2', 'max:255'],
            'value_min' => ['required', 'numeric'],
            'hours_min' => ['required', 'integer', 'min:1', 'max: 8'],
            'percent' => ['required', 'integer', 'min:1', 'max: 99'],
            'value_bedroom' => ['required', 'numeric'],
            'hours_bedroom' => ['required', 'integer', 'min:1', 'max: 8'],
            'value_living_room' => ['required', 'numeric'],
            'hours_living_room' => ['required', 'integer', 'min:1', 'max: 8'],
            'value_bathroom' => ['required', 'numeric'],
            'hours_bathroom' => ['required', 'integer', 'min:1', 'max: 8'],
            'value_kitchen' => ['required', 'numeric'],
            'hours_kitchen' => ['required', 'integer', 'min:1', 'max: 8'],
            'value_yard' => ['required', 'numeric'],
            'hours_yard' => ['required', 'integer', 'min:1', 'max: 8'],
            'value_others' => ['required', 'numeric'],
            'hours_others' => ['required', 'integer', 'min:1', 'max: 8'],
            'icon' => ['required', Rule::in(['twf-cleaning-1', 'twf-cleaning-2', 'twf-cleaning-3'])],
            'position' => ['required', 'integer', 'min:1', 'max: 99']
        ];
    }

    /**
     * Overwrite function to deal with Currency fields in DB
     *
     * @return array
     */
    public function validationData()
    {
        $data = $this->all();

        $data['value_min'] = $this->formatCurrency($data['value_min']);
        $data['value_bedroom'] = $this->formatCurrency($data['value_bedroom']);
        $data['value_living_room'] = $this->formatCurrency($data['value_living_room']);
        $data['value_bathroom'] = $this->formatCurrency($data['value_bathroom']);
        $data['value_kitchen'] = $this->formatCurrency($data['value_kitchen']);
        $data['value_yard'] = $this->formatCurrency($data['value_yard']);
        $data['value_others'] = $this->formatCurrency($data['value_others']);

        // Replace data from REQUEST
        $this->replace($data);

        return $data;
    }

    /**
     * Format Currency to BR$
     *
     * @param string $value
     * @return string
     */
    protected function formatCurrency(string $value)
    {
        return str_replace(['.', ','], ['', '.'], $value);
    }
}
