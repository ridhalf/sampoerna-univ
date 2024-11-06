<?php

namespace App\Http\Requests;

use App\Rules\NonEmptyDescription;
use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        $rules = [
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'is_published' => 'required',
            'description' => ['required', new NonEmptyDescription()],
        ];
        if ($this->route()->named('articles.update')) {
            $rules['image'] = 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'; // Untuk update
        }
        return $rules;
    }
    public function messages() : array
    {
        return [
            'title.required' => 'Title is required.',
            'category.required' => 'Category is required.',
            'image.required' => 'An image is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg, webp.',
            'image.max' => 'The image may not be greater than 2 MB.',
            'is_published.required' => 'Publication status is required.',
            'description.required' => 'Description is required.',
        ];
    }
}
