<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    // static public function myRules() {
    //     return [
    //         'title' => 'required|min:5|max:200',
    //         'slug' => 'required|min:5|max:200',
    //         'content' => 'required|min:7',
    //         'description' => 'required|min:7',
    //         'category_id' => 'required|integer',
    //         'posted' => 'required'
    //     ];
    // }

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
    // public function rules(): array
    // {
    //     return $this->myRules();
    // }

    public function rules(): array
    {
        return [
            'title' => 'required|min:5|max:200',
            'slug' => 'required|min:5|max:200',
            'content' => 'required|min:7',
            'description' => 'required|min:7',
            'category_id' => 'required|integer',
            'posted' => 'required'
        ];
    }
}
