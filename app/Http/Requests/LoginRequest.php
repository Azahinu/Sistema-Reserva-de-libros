<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
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
     *Esta clase esta creada para poder validar el login en la pagina
     */
    public function rules()
    {
        return [
            
            'username'=>'required',
            'password'=>'required'

        ];
    }
    //Se crea esta funcion para poder iniciar sesion con usuario y email
    public function getCredentials(){
        $username = $this->get('username');

        if($this->isEmail($username)){
            return [
                'email'=>$username,
                'password'=>$this->get('password')
            ];
        }
        return $this->only('username','password');
    }

    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);

        return  !$factory->make(['username'=>$value], ['username'=>'email'])->fails();

    }
}
