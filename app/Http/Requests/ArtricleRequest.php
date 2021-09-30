<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtricleRequest extends FormRequest
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
        if (request()->routeIs('admin.article.create.store')) {
            $imageRule = 'required';
        }elseif (request()->routeIs('admin.article.edit.update')) {
            $imageRule = 'sometimes';
        }

        return [
            'titre' => 'required|min:3',
            'price' => 'required',
            'description' => 'required|min:3',
            'category_id'=> 'required',
            'status_id'=> 'required',
            'image' => $imageRule
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->image == null) {
            $this->request->remove('image');
        }
    }
}
