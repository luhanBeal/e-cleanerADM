<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServicoRequest extends FormRequest
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
            'nome' => ['required', 'min:2', 'max:255'],
            'valor_minimo' => ['required', 'numeric'],
            'quantidade_horas' => ['required', 'integer'],
            'porcentagem' => ['required', 'integer'],
            'valor_quarto' => ['required', 'numeric'],
            'horas_quarto' => ['required', 'integer'],
            'valor_sala' => ['required', 'numeric'],
            'horas_sala' => ['required', 'integer'],
            'valor_banheiro' => ['required', 'numeric'],
            'horas_banheiro' => ['required', 'integer'],
            'valor_cozinha' => ['required', 'numeric'],
            'horas_cozinha' => ['required', 'integer'],
            'valor_quintal' => ['required', 'numeric'],
            'horas_quintal' => ['required', 'integer'],
            'valor_outros' => ['required', 'numeric'],
            'horas_outros' => ['required', 'integer'],
            'icone' => ['required', Rule::in(['twf-cleaning-1', 'twf-cleaning-2', 'twf-cleaning-3'])],
            'posicao' => ['required', 'integer']
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

        $data['valor_minimo'] = $this->formatCurrency($data['valor_minimo']);
        $data['valor_quarto'] = $this->formatCurrency($data['valor_quarto']);
        $data['valor_sala'] = $this->formatCurrency($data['valor_sala']);
        $data['valor_banheiro'] = $this->formatCurrency($data['valor_banheiro']);
        $data['valor_cozinha'] = $this->formatCurrency($data['valor_cozinha']);
        $data['valor_quintal'] = $this->formatCurrency($data['valor_quintal']);
        $data['valor_outros'] = $this->formatCurrency($data['valor_outros']);

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
