<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLanguageRequest extends FormRequest
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
            'languages' => 'required',
            'slug' => 'required',
            'direction' => 'required',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                'languages.required' => 'The language field is required !!',
                'slug.required' => 'The slug field is required !!',
                'direction.required' => 'The direction field is required !!',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                'languages.required' => 'लैंग्वेज फ़ील्ड आवश्यक है !!',
                'slug.required' => 'स्लग फ़ील्ड आवश्यक है !!',
                'direction.required' => 'डायरेक्शन फ़ील्ड आवश्यक है !!',
            ];
        }
    }
}
