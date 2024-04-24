<?php

namespace App\Http\Controllers;

use App\Models\RentalCar;
use App\Models\Car;
use Illuminate\Http\Request;

class RentalCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rental-car.index', [
            'title'     => 'Peminjaman Mobil',
            'rentCar'   => RentalCar::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rental-car.create', [
            'title'     => 'Sewa Mobil',
            'cars'       => Car::where('status', '1')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Car::where('id', $request->car_id)->update([
            'status' => 2
        ]);
        RentalCar::create($request->all());
        return redirect('/rent-car')->with('success', 'Peminjaman mobil berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(RentalCar $rentalCar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RentalCar $rentalCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RentalCar $rentalCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RentalCar $rentalCar)
    {
        //
    }
}
