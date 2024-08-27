<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDayRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'date' => 'required|date|unique:days,date',
            'preview_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function messages(){
        return [
            'date.required' => 'The date field is required.',
            'date.date' => 'The date must be a valid date format.',
            'date.unique' => 'The selected date has already been taken.',
            
            'preview_image.required' => 'An image is required.',
            'preview_image.image' => 'The file must be an image.',
            'preview_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'preview_image.max' => 'The image size must not exceed 2MB.',
        ];
    }
}
