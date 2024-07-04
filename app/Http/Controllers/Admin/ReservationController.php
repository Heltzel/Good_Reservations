<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tableTitle = "Reservations";
        $rows = Reservation::all()->map(function ($reservation) {
            return [
                'id' => $reservation->id,
                'name' => $reservation->last_name,
                'email' => $reservation->email,
                'phone' => $reservation->tel_number,
                'when' => $reservation->res_date,
                'guest_num' => $reservation->guest_number,
                'action' => ['name' => 'Show', 'route' => 'admin.reservations.show', 'param' => 'reservation']
            ];
        });
        $headers = ['id', 'Name', 'Email', 'Phone', 'When', "Guestnumber", 'Action'];
        return view("admin.reservations.index", compact(["headers", "rows", "tableTitle"]));
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
    public function show(Reservation $reservation)
    {
        return view('admin.reservations.show', compact("reservation"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
