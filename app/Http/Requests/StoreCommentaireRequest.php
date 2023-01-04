<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentaireRequest extends FormRequest
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
            //

            'COM_AUTEUR' => ['required','alpha','max:100'],
            'COM_CONTENU' => ['required','alpha','max:200']
        ];
    }

    public function messages()
    {
        return [
            'COM_AUTEUR.required' => 'Le nom de l\'auteur est obligatoire',
            'COM_AUTEUR.max' => 'Le nom de l\'auteur ne doit pas dépasser 100 caractères',
            'COM_AUTEUR.alpha' => 'Le nom doit contenir uniquement dse lettres',
            'COM_CONTENU.required' => 'Le commentaire du billet est obligatoire',
            'COM_CONTENU.max' => 'Le commentaire ne doir pas dépasser 200 caractères',
            'COM_CONTENU.alpha' => 'Le commentaire doit contenir uniquement des lettres',
        ];
    }
}
