<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
    
    $bookId = $this->route('book'); 

    if (is_object($bookId)) {
        $bookId = $bookId->id;
    }

    return [
        'ISBN' => [
            'required',
            'string',
            'size:13',
            Rule::unique('books', 'ISBN')->ignore($bookId),
        ],

        'title' => 'required|string|max:70',

        'price' => 'required|numeric|min:0|max:99.99',

        'mortgage' => 'required|numeric|min:0|max:9999.99',

        'authorship_date' => 'nullable|date',

        'category_id' => 'required|integer|exists:categories,id',
    ];
            
    }
}
