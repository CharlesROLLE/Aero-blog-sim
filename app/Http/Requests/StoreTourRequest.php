<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreTourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('tour_access');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'legNumber'      => 'required',
            'name'           => 'required',
            'slug'           => 'required|unique:tours',
            'imageDep'       => 'required|image|mimes: jpeg,png,jpg,gif|max:2048',
            'icaoDep'        => 'required',
            'icaoDepContent' => 'required',
            'icaoDesContent' => 'required',
            'imageDes'       => 'required|image|mimes: jpeg,png,jpg,gif|max:2048',
            'icaoDes'        => 'required',
            'descriptionLeg' => 'required',
            'rutaIfr'        => 'required',
            'departures'     => 'required',
            'arrivals'       => 'required',
            'approachs'      => 'required',
        ];
    }
}
