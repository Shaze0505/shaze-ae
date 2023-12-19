<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "category_id" => "required|exists:categories,id",
            "name" => "required|min:2|max:255",
            "cover_1" => "required",
            "cover_2" => "required",
            "price" => "required|numeric",
            "discount_price" => "nullable|numeric",
            "home_visible" => "required|boolean",
            "banner" => "required",
            "banner_text" => "required",
            "slider_3" => "required",
            "slider_2" => "required",
            "slider_1" => "required",
            "slider_text" => "required",
            "content_header" => "required",
            "content_text" => "required",
            "content_image" => "required",
            "length" => "nullable",
            "width" => "nullable",
            "height" => "nullable",
            "capacity" => "nullable",
            "material" => "nullable",
            "color" => "nullable",
            "rgb" => "nullable"
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
