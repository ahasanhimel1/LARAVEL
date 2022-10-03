<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public static function getAllStudent()
    {
        return [
            0 => [
                'id'     => 1,
                'name'   =>'Ahasan',
                'email'  => 'ahasan@gmail.com',
                'mobile' => '12345678910',
                ],
            1 => [
                'id'     => 2,
                'name'   =>'Ullah',
                'email'  => 'ullah@gmail.com',
                'mobile' => '12345678911',
                ],
            2 => [
                'id'     => 3,
                'name'   =>'Himel',
                'email'  => 'himel@gmail.com',
                'mobile' => '12345678912',
                ]
        ];
    }
}
