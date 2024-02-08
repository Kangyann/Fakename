<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Faker\Provider\PhoneNumber;
class FakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $listeners = ['updateInput' => 'handleDataInput'];
    public function index(Request $request)
    {
        $country = null;
        $gender = null;
        if ($request->has('country') || $request->has('gender')) {
            $gender = $request->gender;
            $country = $request->country;
        }
        $country = $country == null ? 'id_ID' : $country;
        $gender = $gender == null ? null : $gender;
        $faker = Faker::create($country);
        $data = [
            'u' => [
                'firstName' => $faker->firstName($gender),
                'lastName' => $faker->lastName($gender),
                'gender' => $faker->title($gender),
                'birthDay' => [
                    'day' => $faker->dayOfMonth,
                    'monthName' => $faker->monthName,
                    'month' => $faker->month,
                    'year' => $faker->year,
                ],
                'address' => $faker->address,
                'phoneNumber' => $faker->phoneNumber,
                'color' => $faker->colorName,
                'nik' => $faker->nik
            ],
            'a' => [
                'city' => $faker->city,
                'state' => $faker->state,
                'country' => $faker->country,
                'postcode' => $faker->postcode,
                'latitude' => $faker->latitude,
                'longitude' => $faker->longitude,
            ],
            'c' => [
                'company' => $faker->company,
                'jobTitle' => $faker->jobTitle,
                'companyEmail' => $faker->companyEmail,
            ],
            'i' => [
                'useragent' => $faker->userAgent,
                'ipv4' => $faker->ipv4,
                'timeZone' => $faker->timezone,
                'email' => $faker->email,
                'safeEmail' => $faker->safeEmail,
                'domainName' => $faker->domainName,
                'username' => $faker->userName,
                'password' => $faker->password,
            ],
            'cardDetails' => $faker->creditCardDetails,
            'uuid' => $faker->uuid
        ];
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
