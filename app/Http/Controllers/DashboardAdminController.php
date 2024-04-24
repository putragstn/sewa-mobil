<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;
use App\Models\RentalCar;
use App\Models\User;

class DashboardAdminController extends Controller
{
    public function index()
    {
        return view('dashboard-admin.index', [
            'title' => 'Dashboard',
            'totalMobil'    => Car::all()->count(),
            'totalPeminjam' => RentalCar::all()->count(),
            'totalUser'     => User::all()->count()
        ]);
    }
}
