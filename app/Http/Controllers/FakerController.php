<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
class FakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $listeners = ['updateInput' => 'handleDataInput'];
    public function index()
    {
        $requestCountry = null;
        $country = $requestCountry !== null ? $requestCountry : 'en_EN';
        $faker = Faker::create('id_ID');
        $data = [
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'username' => $faker->userName,
            'password' => $faker->password,
            'datetime' => $faker->dateTimeAD,
            'email' => $faker->email,
            'safeEmail' => $faker->email,
            'timeZone' => $faker->timezone,
            'ipv4' => $faker->ipv4,
            'useragent' => $faker->userAgent,
            'payment' => $faker->creditCardDetails,
        ];
        return view('index',compact('data'));
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
