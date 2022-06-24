<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addProductForm extends FormRequest
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
            'name'=> 'required',
            'image'=> 'required',
            'description'=> 'required',
            'unit_price'=> 'required',
            'promotion_price'=> 'required',
            'unit'=> 'required',
            'new'=> 'required',
            'id_type'=> 'required'
        ];
    }
    public function messages(){
        return[
            // 'hoten.required' => 'Phai nhap du ho ten',
            // 'tuoi.required' => 'Phai nhap du ho tuoi',
            // 'gaysinh.required' => 'Phai nhap du ho tuoi',
            // 'phone.numeric' => 'vui long kiem tra lai so dien thoai',
            // 'web.string' => 'vui long kiem tra lai ky tu',
            // 'address.string' => 'vui long nhap lai dia chi',
        ];
    }
    
    
}
