<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //admin, mokytojas, studentas, store() metodas atsakingas uz naujo studento sukurima
        // pagal roles mes galime riboti atvaizdavima
        // pagal roles mes turetume riboti ir VEIKSMUS

        //studentas negali pasiekti students.create vaizdo
        //studentas gali pasiekti students.store metodo

        //insomnia/postman paduoti kintamuosius per POST ir pridirbti destytojui nesamoniu


        //
        return true; //true - leidzia, false - neleidzia
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
