<?php

namespace app\models;
use app\core\Model;

class User extends Model {
    public string $name;

    public string $birthday;

    public string $email;

    public string $password;

    public function rules()
    {
        return [
            "name" => "required",
            "birthday" => "required",
            "email" => "required | email",
            "password" => "required | min: 5"
        ];
    }
}