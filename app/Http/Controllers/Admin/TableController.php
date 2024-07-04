<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tableTitle = "Tables";
        $rows = Table::all()->map(function ($table) {
            return [
                'id' => $table->id,
                'name' => $table->name,
                'guest_num' => $table->guest_number,
                'status' => $table->status,
                'location' => $table->location,
                'action' => ['name' => 'Show', 'route' => 'admin.tables.show', 'param' => 'table']
            ];
        });
        $headers = ['id', 'Name', 'Guestnumber', 'status', 'location', 'Action'];
        return view("admin.tables.index", compact(["headers", "rows", "tableTitle"]));
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
    public function show(Table $table)
    {
        return view('admin.tables.show', compact("table"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Table $table)
    {
        //
    }
}
