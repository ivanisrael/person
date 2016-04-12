<?php

namespace Person;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $first_name;
    public $last_name;
    public $middle_name;
    public $birthdate;
    public $street_address;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $religion;
    public $gender;
    public $mobile;
    public $phone;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
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
