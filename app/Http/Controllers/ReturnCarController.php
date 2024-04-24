<?php

namespace App\Http\Controllers;

use App\Models\ReturnCar;
use App\Models\RentalCar;
use App\Models\Car;
use Illuminate\Http\Request;

class ReturnCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('return-car.index', [
            'title' => 'Pengembalian Mobil'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('return-car.create', [
            'title' => 'Form Pengembalian Mobil'
        ]);
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
    public function show(ReturnCar $returnCar)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReturnCar $returnCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ReturnCar $returnCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReturnCar $returnCar)
    {
        //
    }

    public function search(Request $request){
        $search = $request->input('search');
        $results = Car::where('no_plat', 'like', "%$search%")->get();

        // if(!$results){
        //     return redirect('return-car.create')->with('Error', 'Registrasi berhasil, silahkan login');
        // }

        return view('return-car.create', [
            'results'   => $results,
            'title'     => 'Pengembalian Mobil'
        ]);
    }
}
