<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApartmentsRequest extends FormRequest
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
            'name' => 'required|min:10,max:50',
            'address' => 'required',
            'description' => 'required',
            'detail' => 'required',
            'thumbnail' => 'required|mimes:jpeg,jpg,png,gif',
            'price' => 'required|numeric',
            'status' => 'required|integer|min:1|max:3',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>"Name cannot be blank",
            'name.min'=>"ame must be between 10 and 50 characters",
            'name.max'=>"ame must be between 10 and 50 characters",
            'address.required'=>"Address cannot be blank",
            'detail.required'=>"Detail cannot be blank",
            'thumbnail.required'=>"Thumbnail cannot be blank",
            'thumbnail.mimes'=>"Thumbnail must be image",
            'price.required'=>"Price cannot be blank",
            'price.numeric'=>"Price must be number",
            'status.required'=>"Status cannot be blank",
            'status.min'=>"Status must be between 1 and 3",
            'status.max'=>"Status must be between 1 and 3",
            'description.required'=>"Description cannot be blank",

        ];
    }
}
