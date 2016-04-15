<?php

namespace Person;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    private $first_name;
    private $last_name;
    private $middle_name;
    private $email;
    private $birthdate;
    private $street_address;
    private $city;
    private $province;
    private $country;
    private $zipcode;
    private $religion;
    private $gender;
    private $mobile;
    private $phone;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'birthdate',
        'street_address',
        'city',
        'province',
        'country',
        'zipcode',
        'religion',
        'gender',
        'mobile',
        'phone',
    ];

}
