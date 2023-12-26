<?php

namespace App\Http\Requests\Admin\Group;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => "required|string|min:3|max:18|unique:groups,name",
        ];
    }

    public function messages(){
        return[
            'name.required'=> 'обязательное поле',
            'name.string'=> 'обязательно текст',
            'name.min'=> 'минимум 3 знака',
            'name.max'=> 'максимум 18 знаков',
            'name.unique'=> 'такая категория уже есть',
        ];
    }
}
